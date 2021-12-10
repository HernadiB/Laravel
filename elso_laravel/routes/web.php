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
})->name("modern-family");

Route::get('/harry-potter/fred-es-george', function () {
    return "– Mindig is tudtuk hol a határ - bólintott Fred <br>
    - És csak óvatosan léptük át - tette hozzá George.";
})->name("harry-potter.fred-es-george");

Route::get('/harry-potter/hermione', function () {
    return "Még egy ilyen remek ötlet, és mindhárman meghalunk, vagy akár ki
    is csaphatnak!";
})->name("harry-potter.hermione");


//naptár feladat
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

//szamológép feladat
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


//hétnapjai feladat
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

//mezga feladat
Route::get('/mezga', function () {
    return view('mezga.mezga');
})->name("mezga");

Route::get('/mezga/geza', function () {
    return view('mezga.mezga-geza');
})->name("mezga.geza");

Route::get('/mezga/paula', function () {
    return view('mezga.mezga-paula');
})->name("mezga.paula");

Route::get('/mezga/kriszta', function () {
    return view('mezga.mezga-kriszta');
})->name("mezga.kriszta");

Route::get('/mezga/aladar', function () {
    return view('mezga.mezga-aladar');
})->name("mezga.aladar");

Route::get('/mezga/mezga-mz', function () {
    return view('mezga.mezga-mz');
})->name("mezga.mz");


//family feladat
Route::get('/family', function () {
    return view('familyguy.family');
})->name("family");

Route::get('/family/petergriffin', function () {
    return view('familyguy.peter-griffin');
})->name("peter.griffin");

Route::get('/family/loisgriffin', function () {
    return view('familyguy.lois-griffin');
})->name("lois.griffin");

Route::get('/family/chrisgriffin', function () {
    return view('familyguy.chris-griffin');
})->name("chris.griffin");

Route::get('/family/stewiegriffin', function () {
    return view('familyguy.stewie-griffin');
})->name("stewie.griffin");

Route::get('/family/meggriffin', function () {
    return view('familyguy.meg-griffin');
})->name("meg.griffin");

Route::get('/family/margegriffin', function () {
    return view('familyguy.marge-griffin');
})->name("marge.griffin");


//simpson feladat
Route::get('/simpson', function () {
    return view('simpson.simpson');
})->name("simpson");

Route::get('/simpson/bart', function () {
    return view('simpson.bart');
})->name("bart");

Route::get('/simpson/homer', function () {
    return view('simpson.homer');
})->name("homer");

Route::get('/simpson/lisa', function () {
    return view('simpson.lisa');
})->name("lisa");

Route::get('/simpson/marge', function () {
    return view('simpson.marge');
})->name("marge");

//horse feladat
//Route::get("/horse",[\App\Http\Controllers\HorseController::class, "index"])->name("home");

Route::get("/horse/list",[\App\Http\Controllers\HorseController::class, "list"])->name("horse.list");

Route::get("/horse/table",[\App\Http\Controllers\HorseController::class, "table"])->name("horse.table");

Route::get("/horse/grid",[\App\Http\Controllers\HorseController::class, "grid"])->name("horse.grid");


//hangszer feladat
//Route::get('/', [\App\Http\Controllers\HangszerController::class,"index"]);

Route::get("/hangszer/{mode?}",[\App\Http\Controllers\HangszerController::class, "index"])->name("home");

Route::get("/hangszer/{mode?}",[\App\Http\Controllers\HangszerController::class, "index"])->name("homehangszerek");

Route::get("/show/{id}",[\App\Http\Controllers\HangszerController::class, "show"])->name("hangszer.show");

Route::get('/search', [CarController::class, "search"])->name("hangszer.search");


//konyvek feladat

Route::get("/konyvek/{sorszam}", [\App\Http\Controllers\KonyvekController::class, 'index' ])->name("book")->whereNumber("sorszam");


//f1 feladat

Route::get("/team/index", [\App\Http\Controllers\TeamController::class, 'index'])->name("team");

Route::get("/team/view/{id}", [\App\Http\Controllers\TeamController::class, 'view'])->name("team.view");

Route::get("/driver/view/{id}", [\App\Http\Controllers\DriverController::class, 'index'])->name("driver.view");