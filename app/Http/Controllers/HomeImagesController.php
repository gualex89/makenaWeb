<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CarruselCuadro;
use App\Models\Order;
use App\Models\Principalimage;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;

class HomeImagesController extends Controller
{
    public function index(){

        $sliderPrincipal = Principalimage::all();
        $totalImages= $sliderPrincipal->count();
        
        $misProductos = Product::all();


        return view('layouts.base', compact('sliderPrincipal', 'totalImages', 'misProductos') );
    }
    public function homenew(){

        $sliderPrincipal = Principalimage::all();
        $totalImages= $sliderPrincipal->count();
        $banners = Banner::all();
        $carrusel_cuadros  = CarruselCuadro::all();
        
        $misProductos = Product::all();


        return view('layouts.newhome', compact('sliderPrincipal', 'totalImages', 'misProductos', 'banners', 'carrusel_cuadros') );
    }
    
    
    public function catalogo(){

        return view('layouts.catalogo' );
    }
    public function aprobado(Request $request){

        //Datos traido de la url de compra
        $preferenceId = $request->query('preference_id');
       /*  $externalReference = $request->query('external_reference');
        $payment_id = $request->query('payment_id');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '. env('MP_ACCESS_TOKEN')
        ])->get('https://api.mercadopago.com/v1/payments/' . $payment_id);
        
        if ($response->successful()) {

            //Datos que vienen de la API
            $payment_data = $response->json();
            $apiExternalReference = $payment_data['external_reference'];
            $apiStatus = $payment_data['status'];
            $apiMontoPagado = $payment_data['transaction_details'] ['total_paid_amount'];

            //Datos de la base de datos
            $BDdatos = Order::find($apiExternalReference);
            $montoAPagar = $BDdatos->total;
            $emailComprador = $BDdatos->email; */
           /*  $itemsCart = $BDdatos->items_cart; */
            /* dd($itemsCart); */

            
            

            /* if($externalReference == $apiExternalReference && $apiStatus == 'approved' && (int)$apiMontoPagado == (int)$montoAPagar){
                
                $order = Order::find($apiExternalReference);
                
                if($order){ 
                    $order->update ([
                        'status' => 'Aprobado',
                    ]);
                    
                }

            } */
            
           /*  $this->crearEnvio($preferenceId);
            $this->sendEmail($emailComprador, $apiExternalReference, $payment_id);
            $this->sendMailNuevaVenta($BDdatos, $payment_id); */

            return view('layouts.success', [
                'mensaje' => $preferenceId,
            
            ]);
        /* } else {
            $error_message = $response->body();
            echo $error_message;
        } */
    }
    public function sendEmail($emailComprador, $apiExternalReference, $payment_id){ 
        $emailTo = $emailComprador;
        $pathToImage = public_path('images/logo/logo_black.png');

        Mail::send('emails.graciasEmail', [
            'orden' => $apiExternalReference,
            'payment_id' => $payment_id,
            'pathToImage' => $pathToImage

        ], function ($message) use ($emailTo, $pathToImage) {
            $message->to($emailTo)->subject('Gracias por tu compra');
            $message->embed($pathToImage); 
            
        });
    }
    public function sendMailNuevaVenta($BDdatos, $payment_id){
        	$emailTo = 'ventasmakena@gmail.com';
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
    
    public function rechazado(Request $request){
        $preferenceId = $request->query('preference_id');
        $externalReference = $request->query('external_reference');
        $payment_id = $request->query('payment_id');

        $order = Order::find($externalReference);

        if($order){ 
            $order->update ([
                'status' => 'Rechazado',
            ]);
            
        }

        return view('layouts.failure' );
    }
    public function crearEnvio($preferenceId){

        
        $order = Order::where('preference_id', $preferenceId)->first();
        
        $tipoEntrega = $order->tipo_entrega;
        if ($tipoEntrega == "envio") {


            $city = $order->localidad;
            $state = $order->provincia;
            $zipcode = $order->codigo_postal;
            $name = $order->nombre . ' ' . $order->apellido;
            $street = $order->calle;
            $street_number = $order->altura;
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
                // Procesar la respuesta exitosa
                return response()->json($data);
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

    public function generica(){

        

        return view('layouts.failure' );
    }
}


