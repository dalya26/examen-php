<?php

use App\Http\Controllers\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos', [Productos::class, 'index']);
Route::get('/producto', [Productos::class, 'get_product_by_id']);
Route::post('/newproducts', [Productos::class, 'crear']);
Route::post('/save', [Productos::class, 'guardar_editar']);
Route::post('/delete', [Productos::class, 'eliminar']);

