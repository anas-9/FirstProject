<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\Auth\LoginController;


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


Route::get('/products',[ProductsController::class,'index'])->name('products');

Route::get('/products/showID/{id}',[ProductsController::class,'showID'])->where('id','[0-9]+');

Route::get('/products/showName/{name}',[ProductsController::class,'showName'])->where('name','[a-zA-Z]+');

Route::get('/',[\App\Http\Controllers\PagesController::class,'index'])->name('home');

Route::get('/about',[\App\Http\Controllers\PagesController::class,'about'])->name('about');

Route::get('/posts',[\App\Http\Controllers\PostController::class,'index'])->name('posts');

Route::get('/cars',[CarsController::class,'index'])->name('index');

Route::get('/cars/create',[CarsController::class,'create'])->name('create');

Route::get('/cars/store',[CarsController::class,'store'])->name('store');

Route::get('/cars/{id}/edit',[CarsController::class,'edit'])->name('edit');

Route::get('/cars/{id}/update',[CarsController::class,'update'])->name('update');

Route::get('/cars/{id}/delete',[CarsController::class,'destroy'])->name('delete');

Route::get('/cars/{id}/show',[CarsController::class,'show'])->name('show');

Auth::routes();

