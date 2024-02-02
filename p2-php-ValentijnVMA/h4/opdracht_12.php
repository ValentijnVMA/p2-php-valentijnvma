
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style type="text/css">
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }
td {
            border: 1px solid black;
            width: 25px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    //var exchangesrates
$exchangeRates = [
    'Amerikaanse dollar' => 1.21934,
    'Britse pond' => 0.915551,
    'Japanse Yen' => 126.226,
    'Ant. gulden' => 2.18243
];
 
echo "<table border='1'>";
echo "<tr>
        <th>Euro</th>
        <th>Amerikaanse dollar</th>
        <th>Britse pond</th>
        <th>Japanse Yen</th>
        <th>Ant. gulden</th>
      </tr>";
 
       // Loop van 1 tot en met 10 om rijen in de tabel te genereren
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
 

    //loop door exchanges rates  om de currency met converted bedragen intevullen
    foreach ($exchangeRates as $currency => $rate) {
        echo "<td>" . ($i * $rate) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
    ?>
</body>
</html>