<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HangszerController extends Controller
{
    private $headers=[];

    public function index($mode = null)
    {
        if($mode == null){
            return view("hangszer.index",[
                "tomb" => $this->loadData()
            ]);
        }
        if ($mode == "cards"){
            return view("hangszer.cards",[
                "tomb" => $this->loadData()
            ]);
        }
    }
    public function show($id = null){
        return view("hangszer.show",[
            "tomb" => $this->loadData(),
            "hangszerId" => $id
        ]);
    }
    private function loadData()
    {
        $adatok = json_decode(file_get_contents("hangszerek.json"),true);
        return $adatok;
    }
}