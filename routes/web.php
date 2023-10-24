<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('accueil');
});


//--------Route pour afficher le formulaire d'inscription-----------------
Route::get('/auth/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');

Route::post('/auth/register', [AuthController::class, 'register'])->name('register.submit');

// ..................................................................
