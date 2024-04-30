<?php

namespace App\Http\Controllers;

use App\Models\Order;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        MercadoPagoConfig::setAccessToken('APP_USR-392304675465626-030213-da3c92df128f31d0d16c935beaf2b877-514039926');

    $client = new PreferenceClient();
    $preference = $client->create([
    "items"=> array(
        array(
        "title" => "Mi producto",
        "quantity" => 1,
        "unit_price" => 500
        )
    )
    ]);
    
    $preference->back_urls = array(
        "success" => "https://www.makenafundas.com.ar/success",
        "failure" => "https://www.makenafundas.com.ar/failure",
        "pending" => "https://www.makenafundas.com.ar/pending"
    );
    $preference->auto_return = "all";
    
    
    $urls = $preference->back_urls;
    $id = $preference->id;
    

    dd($preference);
    return view('layouts.checkout', array('id' => $id, 'urls' => $urls));

       
    }
    public function SaveOrder(Request $request){
        $data = $request->all();
        
        $order = new Order();
        $order->status = 'Pendiente';
        $order->documento = $data['documento'];
        $order->nombre = $data['nombre'];
        $order->apellido = $data['apellido'];
        $order->email = $data['email'];
        $order->telefono = $data['telefono'];
        $order->codigo_postal = $data['codigo_postal'];
        $order->tipo_entrega = $data['tipo_entrega'];
        $order->provincia = $data['provincia'];
        $order->localidad = $data['localidad']; 
        $order->direccion = $data['direccion']; 
        $order->observacion_entrega = $data['observacion_entrega'];
        $order->cantidad_items = $data['cantidad_items'];
        $order->subtotal = $data['valor_subtotal'];
        $order-> valor_envio = $data['valor_envio'];
        $order->total = $data['valor_total'];
        $order->logistic_type = $data['logistic_type'];
        $order->service_type_code = $data['service_type_code'];
        $order->carrier_id = $data['carrier_id'];
        $order->point_id = $data['point_id_selected'];
        $order->preference_id = $data['preference_id'];
        $order->items_cart = json_encode($data['items_cart']);
        $order->save();
        
        return response()->json(['message' => 'Orden guardada exitosamente']);
        
    }

    
}
