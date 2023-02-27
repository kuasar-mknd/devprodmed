<?php

use App\Http\Controllers\controllerJour2;
use App\Http\Controllers\proverbeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('artistes', [controllerJour2::class,'afficheTab']);
Route::get('artistes/{letter}', [controllerJour2::class,'afficheTab']);

Route::get('proverbes', [proverbeController::class,'afficheProverbes']);




