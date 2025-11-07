<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticasController extends Controller
{
    public function envio(){
   
    
        return view('layouts.newmakena.politica_envio');
    }
    public function devolucionCambios(){
   
    
        return view('layouts.newmakena.politica_devolucion_cambios');
    }
}
