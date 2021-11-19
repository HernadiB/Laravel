<?php
/**
 * @var array[] $tomb lovak tombje
 */
?>

@extends("layouts.horselist")
@section("title", "USA lovak felsorolás")
@section("h1")
    <h1>Az USA államainak nemzeti lovai (Felsorolás)</h1>
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <?php foreach ($tomb as $lovak) :?>
                        <li><?= $lovak["fajta"] . " (" . $lovak["allam"] . " - " . $lovak["ev"] . ")"?></li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section("vissza")
    <h3><a href="{route('home')}">Vissza</a></h3>
@endsection