<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecetteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtelierController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', [AccueilController::class, 'accueil'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

#Ingredient
Route::get('/ingredient/create', [IngredientController::class, 'createForm'])->middleware(['auth'])->name('create_ingredient');

Route::post('/ingredient/create', [IngredientController::class, 'validForm'])->middleware(['auth'])->name('valid_ingredient');

#Recette
Route::get('/recette/create', [RecetteController::class, 'createForm'])->middleware(['auth'])->name('create_recette');
Route::post('/recette/create', [RecetteController::class, 'validForm'])->middleware(['auth'])->name('valid_recette');

#Atelier
Route::get('/atelier/create', [AtelierController::class, 'createForm'])->middleware(['auth'])->name('create_atelier');
Route::post('/atelier/create', [AtelierController::class, 'validForm'])->middleware(['auth'])->name('valid_atelier');

Route::get('/atelier/ateliers', [AtelierController::class, 'getAteliers'])->name('show_ateliers');

#Reservation
Route::get('/reservation/create', [ReservationController::class, 'createForm'])->name('create_reservation');
Route::post('/reservation/create', [ReservationController::class, 'validForm'])->middleware(['auth'])->name('valid_reservation');

require __DIR__ . '/auth.php';
