<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lois Griffin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center bg-success">Lois Griffin</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php $url = asset('images/familyguy/loisgriffin.png')?>
                <img src="<?= $url?>" alt="" class="img-fluid w-25">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>Lois Griffin (eredeti nevén Pewterschmidt) egy kitalált karakter a Family Guy című sorozatban. Peter felesége, Meg, Stewie és Chris édesanyja. Családja gazdag, húga Carol Pewterschmidt, aki folyton lecseréli férjeit, bátyja Patrick Pewterschmidt, édesanyja Barbara Pewterschmidt "Pebs" édesapja pedig Carter Pewterschmidt, aki utálja Petert, ennek pedig gyakran hangot is ad.</p>
            </div>
        </div>
    </div>

</body>
</html>