<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class TransferenciaController extends Controller
{
    public function mostrarFormulario(Request $request)
    {
        $idCodificado = $request->query('orden');
        
        $idOrder = base64_decode($idCodificado);
       
        $orden = Order::find($idOrder);
       if ($orden->esTransferencia==1) {
           return view('layouts.datosTransferencia', ['orden' => $orden]);
       };


        
    }
}
