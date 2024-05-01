<?php

namespace App\Http\Controllers;

use App\Models\Principalimage;
use Illuminate\Http\Request;
use App\Models\Product;



class HomeImagesController extends Controller
{
    public function index(){

        $sliderPrincipal = Principalimage::all();
        $totalImages= $sliderPrincipal->count();
        
        $misProductos = Product::all();


        return view('layouts.base', compact('sliderPrincipal', 'totalImages', 'misProductos') );
    }
    
    
    public function catalogo(){

        return view('layouts.catalogo' );
    }
    public function aprobado(Request $request){
        $preferenceId = $request->query('preference_id');
        $status = $request->query('status');
        $externalReference = $request->query('external_reference');

        return view('layouts.success' , [
            'preferenceId' => $preferenceId,
            'status' => $status,
            'externalReference' => $externalReference
        ]);
    }
    public function rechazado(){

        return view('layouts.failure' );
    }

    public function generica(Request $request){

        $payment_id = $request->payment_id;

        return $request->all();
    }
}


