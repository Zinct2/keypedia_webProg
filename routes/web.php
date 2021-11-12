<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [LoginController::class, 'index']);


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index_category'])->name('home');

Route::get('/product/{id}', [ShopController::class, 'category']);

//Delete

Route::delete('/delete/{id}', [ProductController::class, 'destroy']);

//Update

Route::get('/update/{id}', [ProductController::class, 'edit']);

Route::patch('/update-product/{id}', [ProductController::class, 'update'])->name('update-keyboard');

//Cart

Route::get('/cart', [CartController::class, 'index']);

Route::post('/cart/store', [CartController::class, 'store']);

