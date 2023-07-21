<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::prefix('productos')->group(function () {
    Route::get('/productos', [ProductoController::class, 'index']);
    Route::get('/productos/create', [ProductoController::class, 'create']);
    Route::post('/productos', [ProductoController::class, 'store']);
    Route::get('/productos/{id}/edit', [ProductoController::class, 'edit']);
    Route::put('/productos/{id}', [ProductoController::class, 'update']);
    Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);
});
