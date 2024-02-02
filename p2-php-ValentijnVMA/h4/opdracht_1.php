<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // uur op dit moment
    $uur = date("H");

    // kijkt of het ochtend is
    if ($uur >= 6  && $uur < 12) {
        echo "Het is ochtend";
    } 
    // kijkt of t middag is
    else if ($uur >= 12 && $uur < 18) {
        echo "Het is Middag";
    } 
    // kijkt of t avond is
    else if ($uur >= 18) {
        echo "Het is Avond";
    } 
    // kijkt of t  nacht is (tussen 0 en 6 uur)
    else if ($uur < 6) {
        echo "Het is Nacht";
    }
    ?>
</body>
</html>