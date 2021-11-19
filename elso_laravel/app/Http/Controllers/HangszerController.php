<?php

namespace App\Http\Controllers;

class HangszerController
{
    public function index(){
        return view("hangszer.index");
    }

    public function show($id){
        return view();
    }

    private  function lData(){
        $hang = json_decode(file_get_contents("hangszerek.json"),true);
        return $hang;
    }
}