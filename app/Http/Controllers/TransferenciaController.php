<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use App\Services\EnvioService;
use Illuminate\Support\Facades\Mail;


class TransferenciaController extends Controller
{
    protected $envioService;
    public function __construct(EnvioService $envioService) {
        $this->envioService = $envioService;
       
    }
    public function mostrarFormulario(Request $request)
    {
        $idCodificado = $request->query('orden');
        
        $idOrder = base64_decode($idCodificado);
       
        $orden = Order::find($idOrder);
       if ($orden->esTransferencia==1) {
           return view('layouts.datosTransferencia', ['orden' => $orden]);
       };


        
    }

    public function calculaEnvio(Request $request){

        return view('layouts.envios');
    }

    public function webhookTransferencia(Request $request)
    {
        if ($request->input('token') !== env('WEBHOOK_TOKEN')) {
            return response()->json([
                'success' => false,
                'message' => 'Token inválido'
            ], 401);
        }

        $idNuevaOrden = $request->input('idNuevaOrden');
        $idTransferencia = 'TR-' . $request->input('idTransferencia');
        $idOrder = $request->input('idOrder');


        $BDdatos = Order::find($idNuevaOrden);
        $downloads = Download::where('order_id', $idOrder)->get();

        $emailComprador = $BDdatos->email;
        $order = Order::find($idNuevaOrden);

        if ($order->logistic_type == 'carrier_dropoff') {
                        
            $this->envioService->crearEnvio($idNuevaOrden);
        }

        $this->sendEmail($emailComprador, $idNuevaOrden, $idTransferencia, $downloads, $BDdatos);
        $this->sendMailNuevaVenta($BDdatos,$idTransferencia );




        
        

    
        // Puedes guardar, registrar, enviar email, etc.
        // Log the received transfer information
        Log::info("Transfer received: new order ID $idNuevaOrden");
    
        return response()->json([
            'success' => true,
            'message' => 'Webhook recibido correctamente',
        ]);
    }

    public function sendEmail($emailComprador, $apiExternalReference, $payment_id, $downloads, $BDdatos){ 
        $emailTo = $emailComprador;
        $pathToImage = public_path('images/logo/logo_black.png');

        Mail::send('emails.graciasEmail', [
            'orden' => $apiExternalReference,
            'payment_id' => $payment_id,
            'pathToImage' => $pathToImage,
            'downloads' => $downloads,
            'BDdatos' => $BDdatos

        ], function ($message) use ($emailTo, $pathToImage) {
            $message->to($emailTo)->subject('Gracias por tu compra');
            $message->embed($pathToImage); 
            
        });
    }
    public function sendMailNuevaVenta($BDdatos, $payment_id){
        $emailTo = 'ventasmakena@gmail.com';
        $pathToImage = public_path('images/logo/logo_black.png');
        /* dd($pathToImage); */
        $itemsCart = json_decode($BDdatos->items_cart, true);
        $datosArray = $itemsCart;
        $nombresImagen = [];
        foreach ($itemsCart as $item) {
            if (isset($item['nombreImagen'])) {
                $nombresImagenes[] = $item['nombreImagen'];
            }
        }
        /* dd($nombresImagenes);  */

        Mail::send('emails.ventaNuevaMail', [
            'BDdatos' => $BDdatos,
            'payment_id' => $payment_id,
            'pathToImage' => $pathToImage
        ], function ($message) use ($emailTo, $pathToImage, $nombresImagenes, $BDdatos) {
            $message->to($emailTo)->subject('Tienes una venta ' .  $BDdatos->id_order);

            // Adjuntar las imágenes al correo si es necesario
            foreach ($nombresImagenes as $nombreImagen) {
                $imagePath = public_path('storage/images/') . $nombreImagen;
                $nombreImagenComposicion = 'Comp-' . $nombreImagen;
                $imagePathComposicion = public_path('storage/images/') . $nombreImagenComposicion;
                if (file_exists($imagePath)) {
                    $message->attach($imagePath, [
                        'as' => $nombreImagen,
                        'mime' => 'image/png' // Ajusta el tipo MIME según el tipo de imagen
                    ]);
                    $message->attach($imagePathComposicion, [
                        'as' =>  $nombreImagenComposicion,
                        'mime' => 'image/png' // Ajusta el tipo MIME según el tipo de imagen
                    ]);
                }
            }
            $message->embed($pathToImage, 'logo');
        });
}
}
