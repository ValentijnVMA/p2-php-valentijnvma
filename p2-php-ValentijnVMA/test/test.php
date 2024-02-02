<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // kijkt welke dag het is
    $dag = date("l");
    
    // kijkt welke dag die krijg
    //echo "Huidige dag: $dag<br>";
    

    // Kijk of het overeenkomt
    $resultaat = match ($dag) {
        "Monday" =>"Werkdag",
        "Tuesday" => "Werkdag",
        "Wednesday" => "Werkdag",
        "Thursday" => "Werkdag",
        "Friday" => "Werkdag",
        "Saturday" => "Weekend",
        "Sunday" => "Weekend",
        default => "Ongeldige dag",
    };

    // Geef het resultaat  HTML
    echo $resultaat;
?>

  
</body>
</html>