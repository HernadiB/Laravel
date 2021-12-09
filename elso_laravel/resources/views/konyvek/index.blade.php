@php
    /** @var int $sorszam A feladat sorszáma
    * @var string[] $kerdesek A kérdések
    * @var Illuminate\Support\Collection $adatok A lekérdezés eredménye
    */
@endphp

<h1><b>{{$sorszam}}. feladat</b></h1>
<h4>{{$kerdesek[$sorszam]}}</h4>

<table border="1">
    <tr>
        @foreach($oszlopok as $oszlop)
            <th>{{$oszlop}}</th>
        @endforeach
    </tr>

    @foreach($adatok as $adat)
        <tr>
            @foreach($oszlopok as $oszlop)
                <td>{{$adat->$oszlop}}</td>
            @endforeach
        </tr>
    @endforeach

</table>