<?php

namespace App\Http\Controllers;

class DriverController extends Controller
{
    public function index()
    {
        return view('driver.view', ['driver' => Driver::find($id)]);
    }
}