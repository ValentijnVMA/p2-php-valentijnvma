<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $side1 = 2;
    $side2 = 2;
    $side3 = 1;
 
    if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {

        echo"zijde 1: $side1";
        echo"<br>";
        echo"zijde 2: $side2";
        echo"<br>";
        echo"zijde 3: $side3";
        echo"<br>";
        echo"Kan wel!";
    } else {
        echo"zijde 1: $side1";
        echo"<br>";
        echo"zijde 2: $side2";
        echo"<br>";
        echo"zijde 3: $side3";
        echo"<br>";
        echo"Kan niet!";
    }
    ?>
</body>
</html>