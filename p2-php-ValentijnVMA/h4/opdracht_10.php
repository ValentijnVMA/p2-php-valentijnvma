<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number= 10;
    $sum = 0;
    $calculation = '';
 
    echo"Waarde van variabele number is: $number";
    echo"<br>";
 
    for ($i = 1; $i <= $number; $i++) {
        $sum += $i;
 
        $calculation .= $i;
 
        if ($i < $number) {
            $calculation .= '+';
        }
    }
    echo"<br>";
    echo"Optelling is als volgt:";
    echo"<br>";
    echo "$calculation=$sum";
 
    ?>
</body>
</html>