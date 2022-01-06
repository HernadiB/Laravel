<?php

namespace App\Http\Controllers;

use App\Models\Univerzum;

class UniverzumController extends Controller
{
    public function index()
    {
        return view('univerzum.index',[
            "univerzumok" => Univerzum::all()
        ]);
    }

    public function view($id)
    {
        $univerzum = Univerzum::where("id", $id)->firstOrFail();
        return view('univerzum.view',[
            "univerzum" => $univerzum
        ]);
    }
}