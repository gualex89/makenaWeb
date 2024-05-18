<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\Cover;
use App\Models\Product;




class CatalogueController extends Controller
{
    public function catalogo(Request $request){

        // Obtener el parámetro de categoría de la solicitud
        $categoria = $request->query('categoria');
    
        // Consulta inicial sin filtrar por categoría
        $query = Catalogue::query();
    
        // Si se especifica una categoría, filtrar por esa categoría
        if($categoria) {
            $query->where('file_name', 'like', $categoria . '%');
        }
    
        // Paginar los resultados
        $imagesCatalogo = $query->paginate(12);
        $totalImagesCatalogo = $imagesCatalogo->total();
    
        //Obetenemos los productos para así obtener precios
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
    
        // Pasar los datos a la vista
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