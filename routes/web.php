<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscanerController;
use App\Http\Controllers\StockController;

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

Route::get('/plantilla', function () {
    return view('plantilla.plantilla');
});


Route::get('/nav',function(){
    return view('stockblades.navbar');
});
//Ruta que mostramos por defecto dentro del programa
Route::get('/stock',function(){
    return view('stockblades.stock');
});

//Vistas de opción escaner.
Route::get('/escaner',[EscanerController::class,'vista_escaner']);
//Vista con artículo ya escaneado
Route::get('/escaner/{codigo}',[EscanerController::class,'vista_escaneado']);
//Vista para agregar nuevo articulo
Route::get('/insertar_articulo/{codigo}',[EscanerController::class,'insertar_articulo']);

//Metodo para inserción de datos en la tabla de articulos
Route::get('/insert/{codigo}',[EscanerController::class,'insercion_articulo']);
//Metodo para inserción de datos en tabla nuevos_registros
Route::get('/insertar_escaner/{id_stock}/{id_art}/{color}/{talla}',[EscanerController::class,'insertarRecuento2']);


//vistas de opción Stock con filtros AJAX
Route::get('/stock/{articulo}',[StockController::class,'articulos_ajax']);
Route::get('/color/{color}',[StockController::class,'color_ajax']);
Route::get('/talla/{talla}',[StockController::class,'talla_ajax']);
Route::get('/recuento/{articulo}/{color}/{talla}',[StockController::class,'recuento']);

//Insercion de stock
Route::get('/guardar/{articulo}/{color}/{talla}/{unidadesnuevas}',[StockController::class,'insertarRecuento']);



//Vistas para el auth
Route::get('/stockblades.stock', function () {
    return view('stockblades.stock');
})->middleware(['auth'])->name('Stock');

require __DIR__.'/auth.php';
