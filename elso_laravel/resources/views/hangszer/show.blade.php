<?php
/**
 * @var array[] $tomb hangszerek tombje
 * @var array $hangszerId hangszerek id-ja
 */
?>
@extends("layouts.main")
@section("bgcolor", $tomb[$hangszerId]["color"])
@section("h1")
    <h1 class="text-center mt-3 mb-3"><?= $tomb[$hangszerId]["name"] ?></h1>
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-4">
                    <?php $url = asset('images')?>
                    <img src="<?= $url ?>/hangszerek/<?= $tomb[$hangszerId]["image"]?>" class="img-fluid" alt="kep">
            </div>
            <div class="col-8">
                <?php for($i = 0; $i<count($tomb[$hangszerId]["paragraphs"]); $i++): ?>
                <p><?= $tomb[$hangszerId]["paragraphs"][$i] ?> </p>
                <?php endfor ?>
                <button type="button" class="btn btn-secondary"><a href="/hangszer" class="text-white">Vissza a főoldalra</a></button>
            </div>
        </div>
    </div>
@endsection