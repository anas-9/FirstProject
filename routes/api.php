<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data/{id?}',[\App\Http\Controllers\CarsController::class,'list'])->name('list');

Route::post('add',[\App\Http\Controllers\PostController::class,'add'])->name('add');

Route::post('addProduct',[\App\Http\Controllers\ProductsController::class,'addProduct'])->name('addProduct');

Route::put('update',[\App\Http\Controllers\PostController::class,'update'])->name('update');

Route::get('search/{title}',[\App\Http\Controllers\PostController::class,'search'])->name('search');
