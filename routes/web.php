<?php

use Illuminate\Support\Facades\Route;
use App\Http;
use App\Http\Controllers\HomeImagesController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\TuFundaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrecuentesController;
use App\Http\Controllers\ZippinController;
use App\Http\Controllers\MercadoPagoController;
use App\Http\Controllers\webhook;

Route::get('/', [HomeImagesController::class, 'index'])->name('welcome');

Route::get('/catalogo', [HomeImagesController::class, 'catalogo'])->name('catalogo');

Route::get('/generica', [HomeImagesController::class, 'generica'])->name('generica');

Route::get('/aprobado', [HomeImagesController::class, 'aprobado'])->name('aprobado');

Route::get('/rechazado', [HomeImagesController::class, 'rechazado'])->name('rechazado');

// RUTAS DEL CATALOGO
Route::get('/catalogo', [CatalogueController::class, 'catalogo'])->name('catalogo');

Route::get('/catalogo-duo', [CatalogueController::class, 'catalogoDuo'])->name('catalogoDuo');


//RUTAS TUFUNDA

Route::get('/tufunda', [TuFundaController::class, 'tufunda'])->name('tufunda');

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

Route::post('/actualizar-descuento', [CheckoutController::class, 'updateDiscount']);


Route::get('/frecuentes', [FrecuentesController::class, 'Frecuentes'])->name('Frecuentes');


Route::post('/webhook', [webhook::class, 'handleWebhook']);
