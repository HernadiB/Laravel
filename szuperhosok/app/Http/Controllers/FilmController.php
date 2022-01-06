<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Univerzum;

class FilmController extends Controller
{
    public function view($id)
    {
        $film = Film::where("id", $id)->firstOrFail();
        $univerzum = Film::where("univerzum_id", $film->univerzum_id);
        return view("film.view",[
            "film" => $film, "univerzum" => $univerzum, 'cim' => $film . " " . $univerzum
        ]);
    }
}