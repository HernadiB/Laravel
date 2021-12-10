<?php

namespace App\Http\Controllers;

class TeamController extends Controller
{
    public function index()
    {
        return view('team.index', ['teams' => Team::all()]);
    }

    public function view($id)
    {
        return view('team.view', ['team' => Team::find($id)]);
    }
}