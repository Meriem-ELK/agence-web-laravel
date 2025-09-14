<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\AgenceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AgenceController::class, 'index']);
Route::get('/home', [AgenceController::class, 'index']);
Route::get('/apropos', [AgenceController::class, 'apropos']);
Route::get('/equipe', [AgenceController::class, 'equipe']);
Route::get('/portfolio', [AgenceController::class, 'portfolio']);
Route::get('/contact', [AgenceController::class, 'contact']);
Route::post('/contact', [AgenceController::class, 'contactForm']);
