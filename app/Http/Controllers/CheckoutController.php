<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){

        return view('layouts.checkout');
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
