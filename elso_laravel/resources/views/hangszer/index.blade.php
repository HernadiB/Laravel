<?php
/**
 * @var array[] $hang hangszerek tombje
 */
?>
@extends("layouts.main")
@section("title", "Hangszerek")
@section("h1")
    <h1 @class="text-center my-5">Hanszerek</h1>
@endsection
@section("content")
    <div @class="container">
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
    <h3><a href="{{route('home')}}}">Vissza</a></h3>
@endsection