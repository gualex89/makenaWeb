<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Principalimage;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class HomeImagesController extends Controller
{
    public function index(){

        $sliderPrincipal = Principalimage::all();
        $totalImages= $sliderPrincipal->count();
        
        $misProductos = Product::all();


        return view('layouts.base', compact('sliderPrincipal', 'totalImages', 'misProductos') );
    }
    
    
    public function catalogo(){

        return view('layouts.catalogo' );
    }
    public function aprobado(Request $request){

        //Datos traido de la url de compra
        $preferenceId = $request->query('preference_id');
        $externalReference = $request->query('external_reference');
        $payment_id = $request->query('payment_id');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer APP_USR-1411848541116243-030214-10fecfe1efd25afddec535184239e3d3-1709821538'
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
            $emailComprador = $BDdatos->email;
           /*  $itemsCart = $BDdatos->items_cart; */
            /* dd($itemsCart); */

            
            

            if($externalReference == $apiExternalReference && $apiStatus == 'approved' && (int)$apiMontoPagado == (int)$montoAPagar){
                
                $order = Order::find($apiExternalReference);
                
                if($order){ 
                    $order->update ([
                        'status' => 'Aprobado',
                    ]);
                    
                }

            }
            
            $this->sendEmail($emailComprador, $apiExternalReference, $payment_id);
            $this->sendMailNuevaVenta($BDdatos, $payment_id);

            return view('layouts.success', [
                'mensaje' => $preferenceId,
            
            ]);
        } else {
            $error_message = $response->body();
            echo $error_message;
        }
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

    public function generica(){

        

        return view('layouts.failure' );
    }
}


