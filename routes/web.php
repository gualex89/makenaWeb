<?php

use Illuminate\Support\Facades\Route;
use App\Http;
use App\Http\Controllers\HomeImagesController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\TuFundaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrecuentesController;
use App\Http\Controllers\OrdenCompraController;
use App\Http\Controllers\ZippinController;
use App\Http\Controllers\MercadoPagoController;
use App\Http\Controllers\webhook;
use App\Http\Controllers\TransferenciaController;

Route::get('/', [HomeImagesController::class, 'index'])->name('welcome');

Route::get('/catalogo', [HomeImagesController::class, 'catalogo'])->name('catalogo');

Route::get('/generica', [HomeImagesController::class, 'generica'])->name('generica');

Route::get('/aprobado', [HomeImagesController::class, 'aprobado'])->name('aprobado');

Route::get('/rechazado', [HomeImagesController::class, 'rechazado'])->name('rechazado');

// RUTAS DEL CATALOGO
Route::get('/catalogo', [CatalogueController::class, 'catalogo'])->name('catalogo');
Route::get('/catalogonew', [CatalogueController::class, 'catalogoNew'])->name('catalogoNew');

Route::get('/catalogo-duo', [CatalogueController::class, 'catalogoDuo'])->name('catalogoDuo');
Route::get('/catalogo-duo-new', [CatalogueController::class, 'catalogoDuoNew'])->name('catalogoDuoNew');


//RUTAS TUFUNDA

Route::get('/tufunda', [TuFundaController::class, 'tufunda'])->name('tufunda');

Route::get('/tucuadro', [TuFundaController::class, 'tucuadro'])->name('tucuadro');

Route::post('/guardar-imagen-personalizada', [TuFundaController::class, 'guardarImagenPersonalizada'])->name('guardarImagenPersonalizada');

Route::post('/borrar-imagen-personalizada', [TuFundaController::class, 'borrarImagenPersonalizada'])->name('borrarImagenPersonalizada');



Route::get('/obtener-marcas', [TuFundaController::class, 'obtenerMarcas']);


Route::get('/obtener-modelos/{marca}', [TuFundaController::class, 'obtenerModelos']);

Route::get('/obtener-imagen/{modelo}', [TuFundaController::class, 'obtenerImagen']);

//Carrito y checkout


Route::get('/carrito', [CarritoController::class, 'carrito'])->name('carrito');

Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/test-zippin/{codigoPostal}', [ZippinController::class, 'testZippinRequest']);

Route::get('/crear-envio/{preferenceId}', [ZippinController::class, 'crearEnvio']);

Route::post('/guardar-orden', [CheckoutController::class, 'SaveOrder']);

Route::post('/actualizar-orden', [CheckoutController::class, 'updateOrder']);

Route::post('/marcar-transferencia', [CheckoutController::class, 'marcarTransferencia']);

Route::post('/actualizar-descuento', [CheckoutController::class, 'updateDiscount']);

Route::get('/obtener-provincias/{codigoPostal}', [CheckoutController::class, 'obtenerProvincias']);

Route::get('/frecuentes', [FrecuentesController::class, 'Frecuentes'])->name('Frecuentes');
Route::get('/frecuentesnew', [FrecuentesController::class, 'FrecuentesNew'])->name('FrecuentesNew');


Route::post('/webhook', [webhook::class, 'handleWebhook']);


Route::get('/catalogo/{slug}', [CatalogueController::class, 'show'])->name('catalogo.show');
Route::get('/catalogonew/{slug}', [CatalogueController::class, 'show2'])->name('catalogo.show2');


Route::get('/checkout-orden-compra', [OrdenCompraController::class, 'mostrarOrden']);

Route::get('/datos-transferencia', [TransferenciaController::class, 'mostrarFormulario'])->name('datosTransferencia');;
Route::get('/calcula-envio', [TransferenciaController::class, 'calculaEnvio'])->name('calculaEnvio');;


Route::get('/homenew', [HomeImagesController::class, 'homenew'])->name('homenew');

