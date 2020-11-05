<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PluginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
/* PLUGINS */
Route::get('/configuration', function (){
    return view('configuration');
})->name('configuration');
Route::post('/activarplugin',[PluginController::class,'ActivarPlugin'])->name('ActivarPlugin');


/*  PRODUCTOS */
Route::get('/producto', function (){
    return view('producto');
})->name('producto');
Route::post('/RegistrarProducto',[ProductoController::class,'CreateProducto'])->name('RegistrarProducto');
Route::get('/ListarProductos',[ProductoController::class,'listarProducto'])->name('ListarProductos');
Route::get('/RegistrarProductos',function(){
    return view('producto');
});
/* SALES */

Route::get('/sales', [SalesController::class,'CrearVenta'])->name('sales');
Route::get('/RegisterVenta/{Producto}',[SalesController::class,'RegistrarVentaPorProductoGet'])->name('RegistrarVentaPorProducto_get');
Route::post('RegistrarVenta/{Producto}',[SalesController::class,'RegistrarVentaPorProductoPost'])->name('RegistrarVentaPorProducto_post');
