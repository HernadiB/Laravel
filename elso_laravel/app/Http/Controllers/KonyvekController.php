<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class KonyvekController
{
    private $kerdesek = [
        1 => "Jelenítse meg az 'Animus kiadó' által kiadott könyvek címét és szerzojét.",
        2 => "Jelenítse meg az összes könyv címét és isbn kódját a 'Varázslók' címu sorozatból!",
        3 => "Listázza ki a gyerek kategóriába tartozó könyvek szerzojét és címét!",
        4 => "Listázza ki 'J.K. Rowling' 500 oldalnál hosszabb könyveinek az eredeti címét!",
        5 => "Listázza ki a 200 és 300 közötti oldalszámú könyv címét és oldalszámát.",
        6 => "Listázza ki a 'Twilight saga' sorozat összes részének a címét a részek sorrendjében.",
        7 => "Milyen sorozatok szerepelnek a könyvek között?",
        8 => "Melyik szerzo hány könyvet írt?",
        9 => "Hány könyv található az adatbázisban?",
        10 => "Melyik szerzo írta a legtöbb könyvet?",
        11 => "Hány könyvnek szerepel az eredeti címe?",
        12 => "Kik fordítottak könyveket?",
        13 => "Kik fordítottak könyveket az 'Agave Könyvek Kiadó Kft.' részére?",
        14 => "Melyik kategóriában hány könyv található?",
        15 => "Hány oldalból állnak átlagosan a sorozatok?",
        16 => "Mi a címe az elso három legtöbb oldalból álló könyvnek?",
        17 => "Hány oldalból áll a leghosszabb könyv?",
        18 => "Melyik sorozat áll több, mint 2000 oldalból?",
        19 => "Listázd ki azoknak a sorozatoknak a nevét, melyek trilógiák.",
        20 => "Melyik szerzo írt legalább 3 könyvet?",
        21 => "Hogy hívják azokat a fordítókat, akik több, mint 2 könyvet fordítottak?",
        22 => "Melyik könyvkiadó hány könyvet adott ki? Az eredmény a könyvkiadó 
        neve szerint ABC rendben jelenjen meg!",
        23 => "Melyik könyvkiadótól szerepel a legtöbb könyv és hány darab?",
        24 => "Listázza ki, hogy melyik könyvsorozatból mennyi rész jelent meg annál a kiadónál, amelyik 
        azonosítója az ISBN kódban 3324! A sorozatban nem szereplõ könyvek nem érdekelnek!",
        25 => "Hány olyan könyv van, ami nem része egy sorozatnak sem?",
        26 => "Mi a címe a leghosszab sorozatnak és hány oldalból áll?",
        27 => "Hány oldalt fordított Tóth Tamás Boldizsár?",
        28 => "Listázza ki a 'fantasy' könyveket!",
    ];

    public function index($sorszam)
    {
        if($sorszam == 1)
        {
            $adatok = DB::table("books")->select("title", "author")->where("publisher", "Animus Kiadó")->get();
        }
        else if($sorszam == 2)
        {
            $adatok = DB::table("books")->select("title", "isbn")->where("series", "Varázslók")->get();
        }
        else if($sorszam == 3)
        {
            $adatok = DB::table("books")->select("author", "title")->where("category", "gyerek")->get();
        }
        else if($sorszam == 4)
        {
            $adatok = DB::table("books")->select("title_original")->where("author", "J. K. Rowling")->where("pages", ">", 500)->get();
        }
        else if($sorszam == 5)
        {
            $adatok = DB::table("books")->select("title", "pages")->whereBetween("pages", [200,300])->get();
        }
        else if($sorszam == 6)
        {
            $adatok = DB::table("books")->select("title")->where("series", "LIKE", "%Twilight saga%")->orderBy("episode")->get();
        }
        else if($sorszam == 7)
        {
            $adatok = DB::table("books")->select("series")->where("series", "<>", null)->distinct()->get();
        }
        else if($sorszam == 8)
        {
            $adatok = DB::table("books")->select("author")->selectRaw("count(*) as db")->groupBy("author")->get();
        }
        else if($sorszam == 9)
        {
            $adatok = DB::table("books")->selectRaw("count(*) as db")->get();
        }
        else if($sorszam == 10)
        {
            $adatok = DB::table("books")->select("author")->selectRaw("count(*) as db")->groupBy("author")->orderBy("db", "desc")->limit(1)->get();
        }
        else if($sorszam == 11)
        {
            $adatok = DB::table("books")->selectRaw("count(*) as db")->where("title_original", "<>", null)->get();
        }
        else if($sorszam == 12)
        {
            $adatok = DB::table("books")->select("translator")->where("translator", "<>", null)->distinct()->get();
        }
        else if($sorszam == 13)
        {
            $adatok = DB::table("books")->select("translator")->where("translator", "<>", null)->where("publisher", "Agave Könyvek Kiadó Kft.")->distinct()->get();
        }
        else if($sorszam == 14)
        {
            $adatok = DB::table("books")->select("category")->selectRaw("count(*) as db")->groupBy("category")->distinct()->get();
        }
        else if($sorszam == 15)
        {
            $adatok = DB::table("books")->selectRaw("avg(pages) as avg")->distinct()->get();
        }
        else if($sorszam == 16)
        {
            $adatok = DB::table("books")->select("title")->orderBy("pages")->limit(3)->get();
        }
        else if($sorszam == 17)
        {
            $adatok = DB::table('books')->select('pages')
                ->orderBy('pages', 'desc')->limit(1)->get();
        }
        else if($sorszam == 18)
        {
            $adatok = DB::table('books')->select('series')
                ->groupBy('series')->havingRaw('sum(pages) > 2000')->distinct()->get();
        }
        else if($sorszam == 19)
        {
            $adatok = DB::table('books')->select('series')
                ->groupBy('series')->havingRaw('count(series) = 3')->get();
        }
        else if($sorszam == 20)
        {
            $adatok = DB::table('books')->select('author')
                ->groupBy('author')->havingRaw('count(title) >= 3')->get();
        }
        else if($sorszam == 21)
        {
            $adatok = DB::table('books')->select('translator')
                ->groupBy('translator')->havingRaw('count(title) > 2')->get();
        }
        else if($sorszam == 22)
        {
            $adatok = DB::table('books')->select('publisher')->selectRaw('count(*) as db')
                ->groupBy('publisher')->orderBy('publisher')->get();
        }
        else if($sorszam == 23)
        {
            $adatok = DB::table('books')->select('publisher')->selectRaw('count(*) as db')
                ->groupBy('publisher')->orderBy('db', 'desc')->limit(1)->get();
        }
        else if($sorszam == 24)
        {
            $adatok = DB::table('books')
                ->select('series')
                ->selectRaw("count(*) as db")
                ->where("series", "<>", "")
                ->where("isbn", "LIKE", "%3324%")
                ->groupBy("series")
                ->get();
        }
        else if($sorszam == 25)
        {
            $adatok = DB::table('books')
                ->selectRaw('count(*) as db')
                ->where("series", "LIKE", "")
                ->get();
        }
        else if($sorszam == 26)
        {
            $adatok = DB::table('books')
                ->select("series")
                ->selectRaw("sum(pages) as db")
                ->where("series", "<>", "")
                ->groupBy("series")
                ->orderByRaw("(count(series)) desc")
                ->limit(1)
                ->get();
        }
        else if($sorszam == 27)
        {
            $adatok = DB::table('books')
                ->selectRaw("sum(pages) as db")
                ->where("translator", "LIKE", "Tóth Tamás Boldizsár")
                ->get();
        }
        else if($sorszam == 28)
        {
            $adatok = DB::table('books')
                ->select("title")
                ->where("category", "fantasy")
                ->get();
        }

        $oszlopok = array_keys(get_object_vars($adatok->first()));

        return view("konyvek.index", [
           "sorszam" => $sorszam,
           "kerdesek" => $this->kerdesek,
            "oszlopok" => $oszlopok,
            "adatok" => $adatok
        ]);
    }
}