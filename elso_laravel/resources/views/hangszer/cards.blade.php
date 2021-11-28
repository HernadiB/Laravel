<?php
/**
 * @var array[] $tomb hangszerek tombje
 */
?>
@extends("layouts.main")
@section("bgcolor", "lightgreen")
@section("title", "Cards oldal")
@section("h1")
    <h1 class="text-center mb-3">Hangszerek</h1>
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <?php $n = 0 ?>
            <?php foreach ($tomb as $t): ?>
            <div class="col-4">
                <div class="card">
                    <?php $url = asset('images')?>
                    <img src="<?= $url ?>/hangszerek/<?= $t["image"]?>" class="img-fluid" alt="kep">
                    <p class="d-block mx-auto mb-3 mt-3 text-decoration-none"><a href="../show/<?= $n ?>"><?= $t["name"] ?></a></p>
                </div>
            </div>
            <?php $n++; endforeach ?>
        </div>
    </div>
@endsection