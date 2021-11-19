<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center bg-success">Homer</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php $url = asset('images/simpson/homer.png')?>
                <img src="<?= $url?>" alt="" class="img-fluid w-25">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>Homer Jay Simpson egy kitalált szereplő a Simpson család című rajzfilmsorozatban. Kitalálója az amerikai Matt Groening volt, aki a saját apja nevéről nevezte el (Homer Groening). A rövidfilmek a Tracey Ullman Show-ban voltak láthatóak mindaddig, amíg a Fox csatorna nem csinált belőle félórás sorozatot. A csatornán 1989. december 17-én debütált.
                Homer a Simpson család családfője, felesége Marge Simpson, gyerekei Bart, Lisa és Maggie Simpson. Munkahelye a springfieldi atomerőmű 7G szektora, ahol biztonsági felügyelő poszton dolgozik. Több amerikai munkásosztály-sztereotípiát testesít meg: nyers, túlsúlyos, inkompetens, ügyetlen és lusta. Sokszor gyerekesnek tűnik és sok helyzetben nem nagyon példamutató.
                araktere kiemelkedő, sokan ő miatta szerették meg a sorozatot, persze ez köszönhető volt a jó, ötletes humornak is amit az alkotók belecsempésztek a nem hétköznapi történetekbe. Imád enni, legkedveltebb étele a fánk. A sorozat több mint 20 éves fennállása alatt sok mindenben része volt már: járt már a világűrben, Japánban, Afrikában és Ausztráliában. Az egyik részben kiderül, hogy kontaktlencsét hord, majd egy másik rész egyik jelenetéből megtudhatjuk, hogy az agyába egy zsírkréta van fúródva azért ilyen buta. Egy rész pedig felfedi hogy Homer nevében a J. rövidítés a Jay, amit csak az anyja tudott, és egy hippi festményre fel is festette.</p>
            </div>
        </div>
    </div>

</body>
</html>