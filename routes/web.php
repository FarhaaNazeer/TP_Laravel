<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/reservation', [HomeController::class, 'reservation'])->name('reservation');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/products', [ProductController::class, 'shop'])->name('shop');

Route::get('/product/{id}', [ProductController::class, 'product'])->name('product');
