<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center bg-danger">Marge</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php $url = asset('images/simpson/marge.png')?>
                <img src="<?= $url?>" alt="" class="img-fluid w-25">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>Marjorie Jacqueline "Marge" Bouvier-Simpson egy kitalált szereplő a Simpson család animációs rajzfilmsorozatban. Férje Homer, gyerekei: Bart, Lisa és Maggie.
                Minden nagyszerű férfi mögött áll egy nő. Marge éppen rossz helyen áll. Marge az emocionális központja a családnak, az édes zselé a Simpson fánkban. Megmagyarázhatatlanul megértő, határtalanul optimista és riasztóan segítőkész. Bár az egyik epizód szerint gyerekeit csak drogokkal tudja elviselni. Különleges háziasszonyi képességei csodákat tesznek. Régi csirkecsontokból képes nyakláncot varázsolni, maradékokból teli tálat és tűzhangya invázióból oktató és izgalmas rovar cirkuszt. Energiájának nagy része erősen diszfunkcionális családjával való törődésre fordítódik, amire Marge azt mondaná: „a titkos összetevő a kedvesség”. Magyar hangja:Pálos Zsuzsa</p>
            </div>
        </div>
    </div>

</body>
</html>