<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\Cover;
use App\Models\Product;
use App\Models\Duo;




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
    
        // Ordenar por ID descendente (más alto primero)
        $query->orderBy('id', 'desc');
    
        // Paginar los resultados
        $imagesCatalogo = $query->paginate(12);
        $totalImagesCatalogo = $imagesCatalogo->total();
    
        //Obetenemos los productos para así obtener precios
        $misProductos = Product::all();
        $precioFundas = null;
        $precioPopSockets = null;
        $precioFundasDobles = null;
    
        foreach ($misProductos as $producto) {
            if ($producto->name === 'Dragon Ball') {
                $precioFundas = $producto->price;
            }     
            if ($producto->name === 'Popsockets') {
                $precioPopSockets = $producto->price;
            }
            if ($producto->name === 'Fundas para Parejas') {
                $precioFundasDobles = $producto->price;
            }
        }
    
        // Pasar los datos a la vista
        return view('layouts.catalogo', compact('imagesCatalogo', 'totalImagesCatalogo', 'precioFundas', 'precioPopSockets', 'precioFundasDobles'));
    }
    
    public function catalogoDuo(Request $request){

        
    
        // Consulta inicial sin filtrar por categoría
        $query = Duo::query();
    
        // Si se especifica una categoría, filtrar por esa categoría
        
        // Ordenar por ID descendente (más alto primero)
        $query->orderBy('id', 'desc');
    
        // Paginar los resultados
        $imagesCatalogoDuo = $query->paginate(12);
        $totalImagesCatalogoDuo = Duo::all();
    
        //Obetenemos los productos para así obtener precios
        $misProductos = Product::all();
        $precioFundas = null;
        $precioPopSockets = null;
        $precioFundasDobles = null;
    
        foreach ($misProductos as $producto) {
            if ($producto->name === 'Dragon Ball') {
                $precioFundas = $producto->price;
            }     
            if ($producto->name === 'Popsockets') {
                $precioPopSockets = $producto->price;
            }
            if ($producto->name === 'Sailor Moon') {
                $precioFundasDobles = $producto->price;
            }
        }
    
        // Pasar los datos a la vista
        return view('layouts.catalogoduo', compact('imagesCatalogoDuo', 'totalImagesCatalogoDuo', 'precioFundas', 'precioPopSockets', 'precioFundasDobles'));
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