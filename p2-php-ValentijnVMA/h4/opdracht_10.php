<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //var met waarde aan 10
    $number= 10;
    // opslag voor var  voor som en berekening 
    $sum = 0;
    $calculation = '';
 //toont waarde aaan op site
    echo"Waarde van variabele number is: $number";
    echo"<br>";
 
    // loop van 1 to number getaal
    for ($i = 1; $i <= $number; $i++) {
        //voeg waarde  $i toe aan de sum
        $sum += $i;
 
        //voeg waarde $i toe aan berekening
        $calculation .= $i;
 // gaat erbij als $i kleiner is dan $number
        if ($i < $number) {
            $calculation .= '+';
        }
    }

    //toont alles op site
    echo"<br>";
    echo"Optelling is als volgt:";
    echo"<br>";
    echo "$calculation=$sum";
 
    ?>
</body>
</html>