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
        $preferenceId = $request->query('preference_id');
        $status = $request->query('status');
        $externalReference = $request->query('external_reference');
        $payment_id = $request->query('payment_id');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer APP_USR-1411848541116243-030214-10fecfe1efd25afddec535184239e3d3-1709821538'
        ])->get('https://api.mercadopago.com/v1/payments/' . $payment_id);
        
        if ($response->successful()) {
            $payment_data = $response->json();
            $apiExternalReference = $payment_data['external_reference'];
            $apiStatus = $payment_data['status'];
            $apiMontoPagado = $payment_data['transaction_details'] ['total_paid_amount'];

            $consultaMonto = Order::find($apiExternalReference);
            $montoAPagar = $consultaMonto->total;
            if($externalReference == $apiExternalReference && $apiStatus == 'approved' && $apiMontoPagado == $montoAPagar){
                
                $order = Order::find($apiExternalReference);
                
                if($order){ 
                    echo "El pago se ha realizado correctamente";
                    $order->update ([
                        'status' => 'Aprobado',
                    ]);
                    
                }

            }
            
            $emailTo = 'gualex89@gmail.com';
            $pathToImage = public_path('images/logo/logomakena.png');

            Mail::send('emails.test', [], function ($message) use ($emailTo, $pathToImage) {
                $message->to($emailTo)->subject('Prueba de correo electrónico con imagen adjunta');
                $message->attach($pathToImage, [
                    'as' => 'logomakena.png',
                    'mime' => 'image/png',
                ]);
            });
            
            
            

            return view('layouts.success', [
                'mensaje' => $preferenceId,
            
            ]);
        } else {
            $error_message = $response->body();
            echo $error_message;
        }
    }
    public function rechazado(){

        return view('layouts.failure' );
    }

    public function generica(Request $request){

        $payment_id = $request->payment_id;

        return $request->all();
    }
}


