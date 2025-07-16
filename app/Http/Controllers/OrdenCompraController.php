<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrdenCompraController extends Controller
{
    public function mostrarOrden(Request $request)
    {
        $ordenCodificada = $request->query('orden');

        try {
            // Decodificar desde base64
            $json = base64_decode($ordenCodificada);
            
            
            

            // Ahora intentar decodificar como JSON
            $orden = json_decode($json, true);
            /* dd($orden) */;
            // Validamos
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Error al decodificar JSON');
            }

        } catch (\Exception $e) {
            return response()->view('error', ['mensaje' => 'Orden inválida o malformada']);
        }


        

        return view('layouts.checkoutOrderCompra', compact('orden'));
    }

}
