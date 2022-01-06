<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Univerzum;

class UniverzumController extends Controller
{
    public function index()
    {
        return view('univerzum.index',[
            "univerzumok" => Univerzum::all(), "cim" => "Univerzum választása"
        ]);
    }

    public function view($id)
    {
        $univerzum = Univerzum::where("id", $id)->firstOrFail();
        return view('univerzum.view',[
            "univerzum" => $univerzum, "filmek" => Film::all(), "cim" => $univerzum
        ]);
    }
}