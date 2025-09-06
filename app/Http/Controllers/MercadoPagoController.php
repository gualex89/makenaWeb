<?php

namespace App\Http\Controllers;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class MercadoPagoController extends Controller
{
    public function crearPreferencia(Request $request){

        $data = $request->all();
        $total = $request->total;
        $discount = $request->discount;
        $subtotal = $request->subtotal - $discount;
        $envio = $request->shippingCost;
        $externalReference = $request->externalReference;
        
        
        
        MercadoPagoConfig::setAccessToken(config('services.mercadopago.token'));

        $client = new PreferenceClient();
        $preference = $client->create([
        "items"=> array(
            array(
            "title" => "Fundas",
            "quantity" => 1,
            "unit_price" => $subtotal
            )
        ),
        "back_urls" => array(
            
            "success" => env('SUCCESS_URL_MP'),
            "failure" => env('ERROR_URL_MP'),
            "pending" => env('ERROR_URL_MP')
            
        ),
        "auto_return" => "all",
        "shipments"  => array(
            "cost" => $envio,
            "mode" => "not_specified",
        ),
        "external_reference" => $externalReference
        
        
        ]);
        
        
        $id = $preference->id;
        

     /* dd($externalReference); */
        return response()->json(['preferenceId' => $id]);

       
    }
   
}
