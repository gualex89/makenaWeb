<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Cover;

class TuFundaController extends Controller
{
    public function tufunda(){

        

        return view('layouts.tufunda');
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
        $modelos = Cover::where('marca', $marca)->pluck('modelo');
        return response()->json($modelos);
    }

    public function obtenerImagen($modelo){
        $imagen = Cover::where('modelo', $modelo)->pluck('imagen');
        return response()->json($imagen);
    }
}