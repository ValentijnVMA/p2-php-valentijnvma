
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 //zorgt voor het uur op het moment 
    $dagdeel = intval(date("H"));
    $result = match ($dagdeel) {
        6, 7, 8, 9, 10, 11, 12 => "Het is ochtend",
        13, 14, 15, 16, 17, 18 => "Het is middag",
        19, 20, 21, 22, 23 => "Het is avond",
        0, 1, 2, 3, 4, 5 => "Het is nacht",
    };
    echo $result;
    ?>
</body>
</html>