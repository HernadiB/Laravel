<?php
/**
 * @var array[] $tomb lovak tombje
 */
?>
@extends("layouts.horsegrid")
@section("title","USA állam lovak grid")
@section("h1")
    <h1 class="text-center my-5">Az USA államainak nemzeti lovai (GRID)</h1>
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <?php foreach($tomb as $lovak) :?>
            <div class="col-4">
                <div class="horse">
                    <h2><?= $lovak["fajta"]?></h2>
                    <p><?= $lovak["allam"] . " (" . $lovak["ev"] . ")"?></p>
                    <img src="{{asset("/images/usalovak/" . $lovak["kep"])}}" alt="" class="img-fluid">
                    <p><?= $lovak["leiras"]?></p>
                </div>
            </div>
                <?php endforeach?>
        </div>
    </div>
@endsection
@section("vissza")
    <h3><a href="{{route('home')}}">Vissza</a></h3>
@endsection
