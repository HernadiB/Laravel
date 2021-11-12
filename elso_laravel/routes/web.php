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

Route::get('/doctor-house2', function () {
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
})->name("modern-family");

Route::get('/harry-potter/fred-es-george', function () {
    return "– Mindig is tudtuk hol a határ - bólintott Fred <br>
    - És csak óvatosan léptük át - tette hozzá George.";
})->name("harry-potter.fred-es-george");

Route::get('/harry-potter/hermione', function () {
    return "Még egy ilyen remek ötlet, és mindhárman meghalunk, vagy akár ki
    is csaphatnak!";
})->name("harry-potter.hermione");

Route::get('/naptar/ma', function () {
    $date = new DateTime();
    return format($date);
});
function format(DateTime $date){
    return $date->format('Y-m-d');
}

Route::get('/naptar/holnap', function () {
    $tomorrow = new DateTime();
    $tomorrow->add(new DateInterval('P1D'));
    return format2($tomorrow);
});
function format2(DateTime $date){
    return $date->format('Y-m-d');
}

Route::get('/naptar/tegnap', function () {
    $yesterday = new DateTime();
    $yesterday->sub(new DateInterval('P1D'));
    return format3($yesterday);
});
function format3(DateTime $date){
    return $date->format('Y-m-d');
}

Route::get('/szamologep/{a}+{b}', function ($a, $b) {
   return $a + $b;
});
Route::get('/szamologep/{a}-{b}', function ($a, $b) {
   return $a - $b;
});
Route::get('/szamologep/{a}*{b}', function ($a, $b) {
   return $a * $b;
});
Route::get('/szamologep/{a}/{b}', function ($a, $b) {
   return $a / $b;
});

Route:: get('/ahetnapja/{eredmeny}', function ($nap){
    switch ($nap){
    case 1: return 'Hétfő';
    case 2: return 'Kedd';
    case 3: return 'Szerda';
    case 4: return 'Csütörtök';
    case 5: return 'Péntek';
    case 6: return 'Szombat';
    case 7: return 'Vasárnap';
    
    default : return 'A hét napjához adja meg a sorászámát (1 és 7 közötti szám)';
    }
    });