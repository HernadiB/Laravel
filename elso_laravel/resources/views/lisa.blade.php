<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center bg-secondary">Lisa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php $url = asset('images/simpson/lisa.png')?>
                <img src="<?= $url?>" alt="" class="img-fluid w-25">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>Lisa Marie Simpson egy kitalált szereplő a Simpson család animációs rajzfilmsorozatban. Apja Homer, anyja Marge. Testvérei: Bart és Maggie.
                Lisa a jó magaviselet, a jó állampolgár és a kreativitás példaképe. Ennek eredményeképpen nehezen illeszkedik be bárhova. Otthon ő a Simpson család lelkiismerete, a politikai korrektség és az értelem képviselője. Következésképpen mellőzve van. Reméli, hogy az iskolában felfedezik egyedi képességeit. És ez így is van: tanárai folyton ötösökkel jutalmazzák. Osztálytársairól minden elmondható, csak az nem, hogy közömbösek: folyton csúfolják, így szociálisan kitaszítottá válik. Habár Bart vonakodva ismeri be, Lisa-nak elég esze és tehetsége van ahhoz, hogy minden utat végigjárjon, nem számít, mások mit mondanak. És ha megteszi, Bart ott lesz, hogy pénzt kérjen kölcsön. Magyar hangja: Bogdányi Titanilla.</p>
            </div>
        </div>
    </div>

</body>
</html>