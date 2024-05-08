<?php

use App\Http\Controllers\Productos;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/nuevo', function () {
    return view('create');
});



Route::get('/productoslist', [Productos::class, 'index'])->name('productos.index');
Route::post('/productos', [Productos::class, 'guardar_editar'])->name('product.create');

Route::post('/crear','Productos@guardar_editar')->name('crear'); 