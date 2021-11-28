<?php
/**
 * @var array[] $tomb hangszerek tombje
 */
?>
@extends('layouts.main')
@section('title', 'Keresés')
@section('content')
    <div class="container">
        <h1 class="text-center">Keresés</h1>
        <div class="my-3">
            {!! Form::open(['route' => 'hangszer.search', "method" => "get"]) !!}
            <div class="my-3">
                {!! Form::label('q', 'Keresőszó'); !!}
                {!! Form::text("q", null, [
                    "placeholder" => "Írjon be valamit, amire keresni szeretne...",
                    "class" => "form-control"
                ]) !!}
            </div>
            <div class="my-3">
                {!! Form::submit("Keresés", [
                    "class" => "btn btn-primary"
                ]) !!}
            </div>
            {!! Form::close() !!}
        </div>
        @if (count($tomb) > 0)
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
        @else
            <div class="alert alert-warning" role="alert">
                A keresésnek megfelelő autó nem található.
            </div>
        @endif
    </div>
@endsection
