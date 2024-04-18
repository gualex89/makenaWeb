<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\Cover;
use App\Models\Product;




class CatalogueController extends Controller
{
    public function catalogo(){

        $imagesCatalogo= Catalogue::all();
        $totalImagesCatalogo = $imagesCatalogo->count();

        //Obetenemos los productos para asi obtener precios
        $misProductos = Product::all();
        $precioFundas = null;
        $precioPopSockets = null;
        $precioFundasDobles = null;

        foreach ($misProductos as $producto) {
            if ($producto->name === 'Fundas') {
                $precioFundas = $producto->price;
                
            }     
            if ($producto->name === 'Popsockets') {
                $precioPopSockets = $producto->price;
                 // Terminamos el bucle una vez que encontramos el producto "fundas"
            }
            if ($producto->name === 'Fundas para Parejas') {
                $precioFundasDobles = $producto->price;
            }
        }


        return view('layouts.catalogo', compact('imagesCatalogo', 'totalImagesCatalogo', 'precioFundas', 'precioPopSockets', 'precioFundasDobles'));
    }
    public function obtenerMarcas(){
        $marcas = Cover::distinct()->pluck('marca');
        return response()->json($marcas);
    }

    public function obtenerModelos($marca) {
        $modelos = Cover::where('marca', $marca)->pluck('modelo');
        return response()->json($modelos);
    }
}