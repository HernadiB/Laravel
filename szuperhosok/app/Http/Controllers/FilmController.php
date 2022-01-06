<?php

namespace App\Http\Controllers;

use App\Models\Film;

class FilmController extends Controller
{
    public function view($id)
    {
        $film = Film::where("id", $id)->firstOrFail();
        return view("film.view",[
            "film" => $film
        ]);
    }
}