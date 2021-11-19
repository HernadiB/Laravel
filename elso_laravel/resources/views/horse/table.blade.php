<?php
/**
 * @var array[] $tomb lovak tombje
 */
?>
@extends("layouts.horsegrid")
@section("title","USA állam lovak táblázat")
@section("h1")
    <h1 class="text-center my-5">Az USA államainak nemzeti lovai (Táblázat)</h1>
@endsection
@section("content")
    <div class="container">
            <table class="table table-responsive table-striped">
                <th>Állam</th>
                <th>Fajta</th>
                <th>Leírás</th>
                <th>Év</th>
                <?php foreach($tomb as $lovak) :?>
                    <tr>
                        <td><?= $lovak["allam"]?></td>
                        <td><?= $lovak["fajta"]?></td>
                        <td><?= $lovak["leiras"]?></td>
                        <td><?= $lovak["ev"]?></td>
                    </tr>
                <?php endforeach?>
            </table>
    </div>
@endsection
@section("vissza")
    <h3><a href="{{route('home')}}">Vissza</a></h3>
@endsection