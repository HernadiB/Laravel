<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peter Griffin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center bg-primary">Peter Griffin</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php $url = asset('images/familyguy/petergriffin.png')?>
                <img src="<?= $url?>" alt="" class="img-fluid w-25">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>Justin Peter Löwenbräu Griffin a Family Guy című amerikai televíziós rajzfilmsorozat szereplője. Eredeti hangját a sorozat alkotója, Seth MacFarlane adja (magyar hangja Kerekes József). Ő tekinthető a műsor főszereplőjének, mivel legtöbbször ő, a családja vagy a baráti köre van a cselekmény középpontjában. Felesége Lois Griffin, három gyermeke pedig Meg, Chris és Stewie. Van egy beszélő, teljesen antropomorf kutyája, Brian, akivel jó barátságot ápol. A karaktere MacFarlane korábbi sorozatának, "Larry shorts" főszereplőjén alapul, akit Larry-nek hívtak. Rendkívül túlsúlyos és szellemileg sem tökéletes. Először az első, A halál árnyékában című epizódban tűnt fel.</p>
            </div>
        </div>
    </div>

</body>
</html>