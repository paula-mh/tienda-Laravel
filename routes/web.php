<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/','App\Http\Controllers\Controlador@verInicio')->name('intro_inicio');

Route::get('tienda','App\Http\Controllers\Controlador@verTienda')->name('intro_tienda');

Route::get('carrito','App\Http\Controllers\Controlador@verCarrito')->name('intro_carrito');

Route::post('tienda', 'App\Http\Controllers\Controlador@guardarProductos')->name('guardar_ruta');

Route::post('guardar', 'App\Http\Controllers\Controlador@guardarCarrito')->name('guardar_carrito');

Route::post('carrito', 'App\Http\Controllers\Controlador@actualizarCarrito')->name('actualizar_carrito');