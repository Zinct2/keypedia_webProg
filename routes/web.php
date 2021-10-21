<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/category/{id}', [ShopController::class, 'category']);

Route::delete('/delete/{id}', [ProductController::class, 'destroy']);

