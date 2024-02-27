<?php

use App\Http\Controllers\VuelosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vuelos_AsientosController;
use App\Http\Controllers\TipoAsientoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/principal', [VuelosController::class,('crear')]);

Route::get('/principal/tiposasientos', [TipoAsientoController::class,'tipoasiento'])->name('tipoasiento');

Route::get('/principal/vuelos', [VuelosController::class,'vuelos'])->name('vuelos');

Route::get('/principal/crearasiento', [TipoAsientoController::class,'crearasiento'])->name('agregartipoasiento');

Route::get('/principal/editarasiento', [TipoAsientoController::class,'editarasiento'])->name('editarasiento');

Route::get('/principal/actualizarasiento', [TipoAsientoController::class,'editaractualizar'])->name('actualizarasiento');

Route::get('/principal/eliminarasiento', [TipoAsientoController::class,'eliminar'])->name('eliminar');

Route::post('/principal/asientocreado', [TipoAsientoController::class,'asientocreado'])->name('asientocreado');

Route::get('/principal/crearvuelo', [VuelosController::class,'crearvuelo'])->name('nuevovuelo');

Route::post('/principal/vuelocreado', [VuelosController::class,'vueloguardar'])->name('guardarvuelo');