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

Route::get('/', function () {
    return view('index');
});

Route::get('/doctor-house', function () {
    return "Nemcsak az emberek megalázásával lehet a gőzt kiereszteni; mondják,
    hogy a bowling jobb még ennél is.";
});

Route::get('/uvegtigris/csoki', function () {
    return "Mennyire vagy túsz? Sörhöz odaférsz?";
});

Route::get('/uvegtigris/lali', function () {
    return "Mennyire vagy túsz? Sörhöz odaférsz?";
});

Route::get('/modern-family', function () {
    return "A siker mindig 1 százalék ihlet, plusz 98 százalék verejték, végül
    pedig 2 százalék odafigyelés.";
});

Route::get('/harry-potter/fred-es-george', function () {
    return "– Mindig is tudtuk hol a határ - bólintott Fred <br>
    - És csak óvatosan léptük át - tette hozzá George.";
});

Route::get('/harry-potter/hermione', function () {
    return "Még egy ilyen remek ötlet, és mindhárman meghalunk, vagy akár ki
    is csaphatnak!";
});

Route::get('/naptar/ma', function () {
    return ;
});
