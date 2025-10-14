<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrecuentesController extends Controller
{
    public function Frecuentes(){

        

        return view('layouts.frecuentes' );
    }
    public function FrecuentesNew(){

        

        return view('layouts.newmakena.frecuentesnew' );
    }
}
