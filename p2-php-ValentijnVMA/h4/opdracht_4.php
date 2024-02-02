<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $price = 200;
    echo "Oude prijs: $ ", $price;
    if ($price > 150) {
        $price = $price * 1.19;
        echo " Na verhoging van 19% is de prijs: $ ", $price;
    } else if ($price < 55) {
        $price = $price * 1.11;
        echo " Na verhoging van 11% is de prijs: $ ", $price;
    } else {
        $price = $price * 1.16;
        echo " Na verhoging van 16% is de prijs: $ ", $price;
    }
    ?>
</body>
</html>
