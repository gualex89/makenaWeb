<?php

namespace App\Http\Controllers;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;


use Illuminate\Http\Request;

class MercadoPagoController extends Controller
{
    public function crearPreferencia(Request $request){

        $data = $request->all();
        $total = $request->total;
        $subtotal = $request->subtotal;
        $envio = $request->shippingCost;
        $externalReference = $request->externalReference;
        
        
        
        MercadoPagoConfig::setAccessToken(env('MP_ACCESS_TOKEN'));

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
            
            "success" => "https://makenaweb.test/aprobado",
            "failure" => "https://makenaweb.test/rechazado",
            "pending" => "https://makenaweb.test/rechazado"
            
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
