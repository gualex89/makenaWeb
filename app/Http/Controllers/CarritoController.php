<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function carrito(){

        return view('layouts.carrito');
    }
    public function carritonew(){

        return view('layouts.newmakena.carritonew');
    }

}