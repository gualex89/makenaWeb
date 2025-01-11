<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Cover;
use App\Models\Product;

class TuFundaController extends Controller
{
    public function tufunda(){
        $misProductos = Product::all();
        $precioFundas = null;

        foreach ($misProductos as $producto) {
            if ($producto->name === 'Dragon Ball') {
                $precioFundas = str_replace('$', '', $producto->price);
                
            }
          
        
        }   
        return view('layouts.tufunda', compact( 'precioFundas') );
    }

    public function guardarImagenPersonalizada(Request $request){

        //imagen completa
        $dataURL = $request->input('dataURL');
        $uniqueName = $request->uniqueName;
        $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $dataURL));
        Storage::disk('public')->put('images/' . $uniqueName, $image);

        //Imagen con Cover
        $dataComposicionURL = $request->input('dataComposicionURL');
        $uniqueNameComposicion = $request->uniqueNameComposicion;
        $imageComposicion = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $dataComposicionURL));
        Storage::disk('public')->put('images/' . $uniqueNameComposicion, $imageComposicion);

        return response()->json(['status' => 'success', 'message' => 'Imagenes guardadas correctamente', 'nombreArchivo' => $uniqueName, 'nombreArchivoComposicion' => $uniqueNameComposicion]);
    }

    public function borrarImagenPersonalizada(Request $request){
        $nombreImagen = $request->nombreImagen;

        if (Storage::disk('public')->exists('images/' . $nombreImagen)) {
            Storage::disk('public')->delete('images/' . $nombreImagen);
            Storage::disk('public')->delete('images/Comp-' . $nombreImagen);
            return response()->json(['success' => true, 'message' => 'La imagen ha sido eliminada correctamente']);
        } else {
            return response()->json(['success' => false, 'message' => 'La imagen no existe']);
        }
        
    }   
    
    
    public function obtenerMarcas(){
        $marcas = Cover::distinct()->pluck('marca');
        return response()->json($marcas);
    }

    public function obtenerModelos($marca) {
        $modelos = Cover::where('marca', $marca)
                        ->orderBy('modelo', 'asc')  // Ordenar alfabéticamente en orden ascendente
                        ->pluck('modelo');
        return response()->json($modelos);
    }

    public function obtenerImagen($modelo){
    
        $imagen = Cover::where('modelo', $modelo)->pluck('imagen')->first();
        $imprimible = Cover::where('modelo', $modelo)->pluck('imprimible')->first();
        
        $result = collect([$imagen, $imprimible]);
        
        return response()->json($result);
    }
}