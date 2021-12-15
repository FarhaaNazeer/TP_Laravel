<?php

use App\Http\Controllers\IngredientController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/ingredient/create', [IngredientController::class, 'createForm'])->middleware(['auth'])->name('create_ingredient');

Route::post('/ingredient/create', [IngredientController::class, 'validForm'])->middleware(['auth'])->name('valid_ingredient');

Route::get('/recette/create', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/atelier/create', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/reservation/create', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
