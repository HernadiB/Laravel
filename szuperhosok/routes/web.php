<?php

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

Route::get('/',[\App\Http\Controllers\UniverzumController::class, 'index'])->name('home');

Route::get('/filmek/{id}', [\App\Http\Controllers\FilmController::class, 'view'])->name('film.view');

Route::get('/univerzumok/{id}', [\App\Http\Controllers\UniverzumController::class, 'view'])->name('univerzum.view');
