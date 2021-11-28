<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center bg-primary">Bart</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php $url = asset('images/simpson/bart.png')?>
                <img src="<?= $url?>" alt="" class="img-fluid w-25">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>Bartholomew J. Simpson egy kitalált szereplő a Simpson család animációs rajzfilmsorozatban. Apja Homer, anyja Marge. Testvérei: Lisa és Maggie.
                Bart mindent meg akar szerezni és általában meg is kapja, amit akar, ami gyakran több, mint amit szeretett volna. Gyakran tölti fel magát egy Kwik-E-Mart szirupos finomsággal; energikus csínytevései mindenkit izgalomban tartanak. Igazi harc a Barttal való foglalkozás: Homer azzal küzd, hogy megőrizze hidegvérét, Lisa a figyelméért harcol, Marge azon van, hogy megmentse Bart torkát Homer-tól. Habár a dacos rosszcsontot sokan elutasítják, Bart erősen birkózik minden nap a lelkiismeretével. Valójában az a legnagyobb félelme, hogy egy nap jó lelkiismerete győzedelmeskedik. Ő a bajkeverő általában.</p>
            </div>
        </div>
    </div>

</body>
</html>