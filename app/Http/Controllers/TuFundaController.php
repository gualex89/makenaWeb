<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cover;

class TuFundaController extends Controller
{
    public function tufunda(){

        

        return view('layouts.tufunda');
    }
    
    public function obtenerMarcas(){
        $marcas = Cover::distinct()->pluck('marca');
        return response()->json($marcas);
    }

    public function obtenerModelos($marca) {
        $modelos = Cover::where('marca', $marca)->pluck('modelo');
        return response()->json($modelos);
    }

    public function obtenerImagen($modelo){
        $imagen = Cover::where('modelo', $modelo)->pluck('imagen');
        return response()->json($imagen);
    }
}