<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Download;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;
use App\Http\Controllers\EnviosController;
use App\Services\EnvioService;

class webhook extends Controller
{
    
    protected $envioService;

    public function __construct(EnvioService $envioService) {
        $this->envioService = $envioService;
       
    }
    // Función para manejar los webhook
    public function handleWebhook(Request $request)
    {
        /* return "ok"; */
        try{
            // desde aqui
            // Obtener datos del webhook
            /* $datos = $request->all();
            $id = $datos['data']['id'];
            
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer '. env('MP_ACCESS_TOKEN')
            ])->get('https://api.mercadopago.com/v1/payments/' . $id);

            if ($response->successful()) { */ // esto debe volver
                $id= "97720605019";
                $response = collect([
                    'external_reference' => '329', // ID de la orden en tu base de datos
                    'status' => 'approved',
                    'transaction_details' => [
                        'total_paid_amount' => 1500,
                    ]
                ]);
            
                //Datos que vienen de la API
                /* $payment_data = $response->json(); */ // esto debe cambiarse
                $payment_data = $response;
                $apiExternalReference = $payment_data['external_reference'];
                $apiStatus = $payment_data['status'];
                $apiMontoPagado = $payment_data['transaction_details'] ['total_paid_amount'];
                
                //Datos de la base de datos
                $BDdatos = Order::find($apiExternalReference);
                $downloads = Download::where('order_id', $apiExternalReference)->get();
                
                $montoAPagar = $BDdatos->total;
                $emailComprador = $BDdatos->email;

                if($apiStatus == 'approved'){
                    $order = Order::find($apiExternalReference);
                    
                    if($order){ 
                        $order->update ([
                            'status' => 'Aprobado',
                        ]);
                        
                    }
                    if ($order->logistic_type == 'carrier_dropoff') {
                        
                        $this->envioService->crearEnvio($apiExternalReference);
                    }
                    /* $this->crearEnvio($apiExternalReference); */
                    $this->sendEmail($emailComprador, $apiExternalReference, $id, $downloads, $BDdatos);
                    $this->sendMailNuevaVenta($BDdatos, $id);
                }
                
                
            /* } */ // esto debe volver   
            
            
            return response()->json(['status' => 'success', 'message' => 'Webhook procesado correctamente']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
    public function sendEmail($emailComprador, $apiExternalReference, $payment_id, $downloads, $BDdatos){ 
        $emailTo = $emailComprador;
        $pathToImage = public_path('images/logo/logo_black.png');

        Mail::send('emails.graciasEmail', [
            'orden' => $apiExternalReference,
            'payment_id' => $payment_id,
            'pathToImage' => $pathToImage,
            'downloads' => $downloads,
            'BDdatos' => $BDdatos

        ], function ($message) use ($emailTo, $pathToImage) {
            $message->to($emailTo)->subject('Gracias por tu compra');
            $message->embed($pathToImage); 
            
        });
    }
    public function sendMailNuevaVenta($BDdatos, $payment_id){
        	$emailTo = 'gualex89@gmail.com';
            $pathToImage = public_path('images/logo/logo_black.png');
            /* dd($pathToImage); */
            $itemsCart = json_decode($BDdatos->items_cart, true);
            $datosArray = $itemsCart;
            $nombresImagen = [];
            foreach ($itemsCart as $item) {
                if (isset($item['nombreImagen'])) {
                    $nombresImagenes[] = $item['nombreImagen'];
                }
            }
            /* dd($nombresImagenes);  */

            Mail::send('emails.ventaNuevaMail', [
                'BDdatos' => $BDdatos,
                'payment_id' => $payment_id,
                'pathToImage' => $pathToImage
            ], function ($message) use ($emailTo, $pathToImage, $nombresImagenes, $BDdatos) {
                $message->to($emailTo)->subject('Tienes una venta ' .  $BDdatos->id_order);
    
                // Adjuntar las imágenes al correo si es necesario
                foreach ($nombresImagenes as $nombreImagen) {
                    $imagePath = public_path('storage/images/') . $nombreImagen;
                    $nombreImagenComposicion = 'Comp-' . $nombreImagen;
                    $imagePathComposicion = public_path('storage/images/') . $nombreImagenComposicion;
                    if (file_exists($imagePath)) {
                        $message->attach($imagePath, [
                            'as' => $nombreImagen,
                            'mime' => 'image/png' // Ajusta el tipo MIME según el tipo de imagen
                        ]);
                        $message->attach($imagePathComposicion, [
                            'as' =>  $nombreImagenComposicion,
                            'mime' => 'image/png' // Ajusta el tipo MIME según el tipo de imagen
                        ]);
                    }
                }
                $message->embed($pathToImage, 'logo');
            });
    }
    public function crearEnvio($apiExternalReference){

        
        $order = Order::find($apiExternalReference);
        if (!$order) {
            return response()->json([
                'error' => [
                    'code' => 404,
                    'message' => 'Order not found.',
                ]
            ], 404);
        }
        
        $tipoEntrega = $order->tipo_entrega;
        $envioZippin = $order->envio_zippin;
        if ($tipoEntrega == "envio" && $envioZippin == NULL) {


            $city = $order->localidad;
            $state = $order->provincia;
            $zipcode = $order->codigo_postal;
            $name = $order->nombre . ' ' . $order->apellido;
            $street = $order->calle;
            $street_number = $order->altura;
            $street_extras = $order->observacion_entrega;
            $document = $order->documento;
            $email = $order->email;
            $phone = $order->telefono;
            $external_id = $order->id_order;
            $logistic_type = $order->logistic_type;
            $service_type = $order->service_type_code;
            $carrier_id = $order->carrier_id;
            $point_id = $order->point_id;
            


            $url = "https://api.zippin.com.ar/v2/shipments";
            $apiToken = "23587f92-3f54-44cf-a1d8-aea20b104914";
            $apiSecret = "a9512c75-d41e-4c3e-92ed-067ff0269bb2";


            $headers = [
                'Accept' => 'application/json',
                'Authorization' => 'Basic ' . base64_encode($apiToken . ':' . $apiSecret),
                'Content-Type' => 'application/json',
            ];

            if ($service_type == "pickup_point") {
                $payload = [
                    "account_id" => "11950",
                    "origin_id" => "344929",
                    "declared_value" => 9000,
                    "logistic_type" => $logistic_type,
                    "carrier_id" => $carrier_id,
                    "service_type" => $service_type,
                    "external_id" => $external_id,
                    "destination" => [
                        "name" => $name,
                        "document" => $document,
                        "email" => $email,
                        "phone" => $phone,
                        "zipcode" => $zipcode,
                        "point_id" => "$point_id"
                    ],
                    "items" => [
                        [
                            "weight" => 150,
                            "height" => 5,
                            "width" => 10,
                            "length" => 20,
                            "description" => "Fundas de celulares",
                            "classification_id" => 1
                        ],
                    ],
                ];
            }else {
                $payload = [
                    "account_id" => "11950",
                    "origin_id" => "344929",
                    "declared_value" => 9000,
                    "logistic_type" => $logistic_type,
                    "carrier_id" => $carrier_id,
                    "service_type" => $service_type,
                    "external_id" => $external_id,
                    "destination" => [
                        "name" => $name,
                        "street" => $street,
                        "street_number" => $street_number,
                        "street_extras" => $street_extras,
                        "document" => $document,
                        "email" => $email,
                        "phone" => $phone,
                        "state" => $state,
                        "city" => $city,
                        "zipcode" => $zipcode,
                        
                    ],
                    "items" => [
                        [
                            "weight" => 150,
                            "height" => 5,
                            "width" => 10,
                            "length" => 20,
                            "description" => "Fundas de celulares",
                            "classification_id" => 1
                        ],
                    ],
                ];
            }
            
            $client = new Client();

            try {
                $response = $client->post($url, [
                    'headers' => $headers,
                    'json' => $payload,
                ]);

                $data = json_decode($response->getBody(), true);
                $order->update ([
                    'envio_zippin' => 1,
                ]);
                // Procesar la respuesta exitosa
                return response()->json($order);
            } catch (\Exception $e) {
                // Manejar el error
                return response()->json([
                    'error' => [
                        'code' => $e->getCode(),
                        'message' => $e->getMessage(),
                    ]
                ], 500); // Código de estado 500 para errores internos del servidor
            }
        }

        

    }
}
