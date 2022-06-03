<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CategoriasController;

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
    return view('welcome');
});

//Una forma de realizar ruteo aprender por controlador
Route::get('/empleado', function () {
    return view('empleado.index');
});
//Una forma de realizar ruteo aprender por controlador
Route::get('/Categorias', function () {
    return view('Categorias.layout');
});
//Se crea ruta para acceder a cada clase
// Route::get('empleado/create',[EmpleadoController::class,'create']);

//Se crea ruta para todas as clases
Route::resource('empleado',EmpleadoController::class);

//Se crea ruta para las categorias
Route::resource('Categorias',CategoriasController::class);