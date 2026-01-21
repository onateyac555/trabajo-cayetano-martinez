<?php

use Illuminate\Support\Facades\Route;

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
});


use App\Http\Controllers\ProductoController;

// Ruta para mostrar el formulario (Opción 2)
Route::get('/productos/crear', [ProductoController::class, 'create']);

// Ruta para recibir los datos y guardarlos en la base de datos
Route::post('/productos/guardar', [ProductoController::class, 'store']);


Route::get('/productos', [\App\Http\Controllers\ProductoController::class, 'index']);


Route::get('/productos/filtrar', [ProductoController::class, 'filtrado']);
Route::delete('/productos/borrar/{id}', [ProductoController::class, 'destroy']);


Route::get('/productos/editar/{id}', [ProductoController::class, 'edit']);
Route::put('/productos/actualizar/{id}', [ProductoController::class, 'update']);
