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

    public function generica(){

        return view('layouts.editor' );
    }
}


