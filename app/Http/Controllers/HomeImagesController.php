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


            if($externalReference == $apiExternalReference && $apiStatus == 'approved' && $apiMontoPagado == $montoAPagar){
                
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
        $pathToImage = public_path('images/logo/logomakena.png');

        Mail::send('emails.graciasEmail', [
            'orden' => $apiExternalReference,
            'payment_id' => $payment_id

        ], function ($message) use ($emailTo, $pathToImage) {
            $message->to($emailTo)->subject('Gracias por tu compra');
            
        });
    }
    public function sendMailNuevaVenta($BDdatos, $payment_id){
        	$emailTo = 'ventas@makenafundas.com.ar';
            $pathToImage = public_path('images/logo/logomakena.png');

            Mail::send('emails.ventaNuevaMail', [
                'BDdatos' => $BDdatos,
                'payment_id' => $payment_id
                

            ], function ($message) use ($emailTo, $pathToImage) {
                $message->to($emailTo)->subject('Gracias por tu compra');
                
            });
    }
    
    public function rechazado(){

        return view('layouts.failure' );
    }

    public function generica(Request $request){

        $payment_id = $request->payment_id;

        return $request->all();
    }
}


