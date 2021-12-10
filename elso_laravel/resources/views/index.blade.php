<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Első</title>
</head>
<body>
<h1>Főoldal</h1>
<ul>
    <li><a href="/doctor-house">Doctor House</a></li>
    <li><a href="/uvegtigris/csoki">Üvegtigris - Csoki</a></li>
    <li><a href="/uvegtigris/lali">Üvegtigris - Lali</a></li>
    <li><a href="<?= route("modern-family")?>">Modern-family</a></li>
    <li><a href="<?= route("harry-potter.fred-es-george")?>">harry-potter.fred-es-george</a></li>
    <li><a href="<?= route("harry-potter.hermione")?>">harry-potter.hermione</a></li>
</ul>
<ul>
    <li><a href="/naptar/ma">Mai dátum</a></li>
    <li><a href="/naptar/holnap">Holnapi dátum</a></li>
    <li><a href="/naptar/tegnap">Tegnapi dátum</a></li>
</ul>

<ul>
    <li><a href="/szamologep">Számológép</a></li>
</ul>

<ul>
    <li><a href="/ahetnapja">Naptár</a></li>
</ul>

<h1>Családok</h1>
<ul>
    <li><a href="<?= route("family")?>">Family Guy</a></li>
    <li><a href="<?= route("simpson")?>">Simpson</a></li>
    <li><a href="<?= route("mezga")?>">Mézga család</a></li>
</ul>

<h1>Az USA államainak nemzeti lovai</h1>
<ul>
    <li><a href="<?= route("horse.list")?>">Felsorolás</a></li>
    <li><a href="<?= route("horse.table")?>">Táblázat</a></li>
    <li><a href="<?= route("horse.grid")?>">Bootstrap GRID</a></li>
</ul>
<p>Forrás: <a href="https://hu.wikipedia.org/wiki/Muszt%C3%A1ng">Wikipádia</a></p>

<h1>Hangszerek</h1>
<ul>
    <li><a href="/hangszer">hangszerek</a></li>
</ul>

<h1>Könyvek Laravel DB</h1>
<p>Az url-be /konyvek/"feladat sorszáma"</p>

<h1>F1</h1>
<p></p>
</body>
</html>