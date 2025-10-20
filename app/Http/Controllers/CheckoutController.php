<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\Order;
use App\Models\PostalCode;
use App\Models\Transferencia;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
   
    
        return view('layouts.checkout');
    }
    public function checkoutnew(){
   
    
        return view('layouts.newmakena.checkoutnew');
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
        $order->provinceCode = $data['provinceCode'];
        $order->localidad = $data['localidad'];
        $order->calle = $data['calle'];
        $order->altura = $data['altura']; 
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
        $order->items_cart = json_encode($data['items_cart']);
        $order->save();
        $id =$order->id_order;

        $itemsCart = $data['items_cart'];

        
        foreach ($itemsCart as $item) {
            
            $download = new Download();
            $download->order_id = $id;
            $download->modelo = $item['modelo'];
            $download->imprimible = $item['nombreImagen'];
            $download->composicion = "Comp-" . $item['nombreImagen'];
            $download->marca = $item['marca'];
            $download->diseno = $item['diseno'];
            $download->idDrive = $item['idDrive'];
            if ($download->diseno === "Cuadro personalizado") {
                $download->cuadro = 1;
            }

            
            
            $download->save();
        }
        
        return response()->json(['message' => 'Orden guardada exitosamente', 'id' => $id]);
        
    }
    public function updateOrder(Request $request){
        $data = $request->all();
        $idOrder = $data['idOrder'];
        $preference_id = $data['preference_id'];

        $order = Order::find($idOrder);
        if($order){
            $order->update([
                'preference_id' => $preference_id,
                
            ]);
            
            
            /* dd($order); */
            // Devolver una respuesta o realizar alguna otra lógica si es necesario
            return response()->json(['message' => 'Orden actualizada correctamente'], 200);
        } else {
            // La orden no fue encontrada, puedes manejar este caso según tu lógica de aplicación
            return response()->json(['message' => 'Orden no encontrada', 'idOrder' => $preference_id], 404);
        }
        
        
        
    }
    public function marcarTransferencia(Request $request){
        $data = $request->all();
        $idOrder = $data['idOrder'];
        

        $order = Order::find($idOrder);
        if($order){
            $order->update([
                'esTransferencia' => 1,
                
            ]);

            $transferencia = new Transferencia();
            $transferencia->order_id = $idOrder;
            $transferencia->save();

            
            
            /* dd($order); */
            // Devolver una respuesta o realizar alguna otra lógica si es necesario
            return response()->json(['message' => 'Orden actualizada correctamente'], 200);
        } else {
            // La orden no fue encontrada, puedes manejar este caso según tu lógica de aplicación
            return response()->json(['message' => 'Orden no encontrada', 'idOrder' => $idOrder], 404);
        }
        
        
        
    }
    public function updateDiscount(Request $request){
        $data = $request->all();
        $idOrder = $data['idOrder'];
        $discount = $data['discount'];
        $order = Order::find($idOrder);
        $nuevoValorTotal = $order->subtotal + $order->valor_envio - $discount;
        /* dd($discount, $nuevoValorTotal, $idOrder); */
        if($order){
            $order->descuento = $discount;
            $order->total = $nuevoValorTotal;
            $order->save();
           
            
            
            /* dd($order); */
            // Devolver una respuesta o realizar alguna otra lógica si es necesario
            return response()->json(['message' => 'Descuento actualizado correctamente'], 200);
        } else {
            // La orden no fue encontrada, puedes manejar este caso aquí depende de tu lógica de aplicación
            return response()->json(['message' => 'Orden no encontrada', 'idOrder' => $discount], 404);
        }
        
        
        
    }

    public function obtenerProvincias($codigoPostal) {
        $provincias = PostalCode::where('cp', $codigoPostal)
                        ->orderBy('provincia', 'asc') // Ordenar alfabéticamente
                        ->distinct()
                        ->get(['provincia', 'provinceCode']); // Obtener ambos campos
    
        return response()->json($provincias);
    }
    

    
}
