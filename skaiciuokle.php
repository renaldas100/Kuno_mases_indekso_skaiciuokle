<?php
$svoris=$_GET['svoris'];
$ugis=$_GET['ugis'];
$kmiRezultatas=$svoris/(($ugis/100)**2);

if ($kmiRezultatas < 18.5) {
    $reiksme="Jūsų svoris yra <b style='font-size: 20px;font-style: italic'> per mažas</b>";
}

if ($kmiRezultatas >= 18.5 && $kmiRezultatas < 25) {
   $reiksme="Jūsų svoris yra <b style='font-size: 20px;font-style: italic'> normalus</b>";
}

if ($kmiRezultatas >= 25 && $kmiRezultatas < 30) {
    $reiksme="Jūsų turite <b style='font-size: 20px;font-style: italic'> viršsvorį</b>";
}

if ($kmiRezultatas >= 30 && $kmiRezultatas < 35) {
    $reiksme="Jūsų turite <b style='font-size: 20px;font-style: italic'> I laipsnio nutukimą</b>";
}

if ($kmiRezultatas >= 35 && $kmiRezultatas < 40) {
    $reiksme="Jūsų turite <b style='font-size: 20px;font-style: italic'> II laipsnio nutukimą</b>";
}

if ($kmiRezultatas >= 40) {
    $reiksme="Jūsų turite <b style='font-size: 20px;font-style: italic'> III laipsnio nutukimą</b>";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="body">
    <div class="container">
        <h1 class="titleText">Kūno masės indekso <br> <span class="titleTextStrong">skaičiuoklė</span></h1>
        <div class="text">
            Jūsų ūgis yra <?=$ugis?>cm, jūsų svoris yra <?=$svoris?>kg<br>
            Jūsų kūno masės indeksas (KMI) yra <b style='font-size: 20px'><?=round($kmiRezultatas,2)?></b> <br>
            <?=$reiksme?>
        </div>
        <div class="text button2">
            <a href="index.php">Skaičiuoti iš naujo</a>
        </div>
    </div>
</div>
</body>
</html>
