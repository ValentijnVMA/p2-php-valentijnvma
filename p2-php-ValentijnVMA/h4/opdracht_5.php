<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // var num die voegt 25
    $num = 25;
    //kijkt of  de var modulo 2 niet ggelijk aan  0 is als het ni zo is is het ggetal oneven
    if ($num % 2){
        echo "is het getal ",$num, " even? Nee";
    } else {
        //all gelijk aan 0 is even
        echo "is het getal ",$num, " even? Ja";
    }
    ?>
</body>
</html>