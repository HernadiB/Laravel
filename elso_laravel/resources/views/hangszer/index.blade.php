<?php
/**
 * @var array[] $hang hangszerek tombje
 */
?>
@extends("layouts.main")
@section("title", "Hangszerek")
@section("nav")
    <nav class="navbar navbar-expand-lg navbar-primary bg-light">
        <a class="navbar-brand" href="#">Hangszerek</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Főoldal</a>
                <a class="nav-item nav-link" href="#">Hangszerek vizuálisan</a>
            </div>
        </div>
    </nav>
@endsection
@section("h1")
    <h1 class="text-center my-5">Hangszerek</h1>
@endsection
@section("content")
    <div class="container">
        <table class="table table-striped table-responsive">
            <th>Sorszám</th>
            <th>Hangszer neve</th>
            <th>Hangszer típusa</th>
            <th>Angolul</th>
            <th>További információ</th>
            <?php foreach($hang as $h) :?>
            <tr>
                <td><?= $h["name"]?></td>
                <td><?= $h["type"]?></td>
                <td><?= $h["english"]?></td>
            </tr>
            <?php endforeach?>
        </table>
    </div>
@endsection
@section("vissza")
    <h3><a href="{{route('hangszer.index')}}}">Vissza</a></h3>
@endsection
