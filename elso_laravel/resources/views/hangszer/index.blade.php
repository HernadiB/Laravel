<?php
/**
 * @var array[] $tomb hangszerek tombje
 */
?>
@extends("layouts.main")
@section("bgcolor", "lightgreen")
@section("title", "Index oldal")
@section("h1")
    <h1 class="text-center">Hangszerek</h1><br>
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                {!! Form::open(['route' => 'hangszer.search', "method" => "get"]) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-10 mx-auto">
                <table class="table table-striped table-responsive">
                    <tr id="border">
                        <th>Sorszám</th>
                        <th>Hangszer neve</th>
                        <th>Hangszer típus</th>
                        <th>Angolul</th>
                        <th>További információ</th>
                    </tr>
                    <?php $n = 1 ?>
                    <?php foreach($tomb as $t):?>
                    <tr>
                        <td><?=$n?></td>
                        <td><?=$t["name"]?></td>
                        <td><?=$t["type"]?></td>
                        <td><?=$t["english"]?></td>
                        <td><a href="/show/<?= $n-1 ?>">Részletek</a></td>
                    </tr>
                    <?php $n++; ?>
                    <?php endforeach?>
                </table>
            </div>
        </div>
    </div>
@endsection