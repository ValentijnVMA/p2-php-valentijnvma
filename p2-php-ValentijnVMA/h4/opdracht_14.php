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
 
        echo "<table border='1'>";
        echo "<tr>
                <th>Miles</th>
                <th>Kilometers</th>
                <th>Miles</th>
                <th>Kilometers</th>
            </tr>";
           
        for ($i = 1; $i <= 20; $i++) {
            $i2 = $i + 20;
            echo "<tr><td>$i</td>";
            echo "<td>" . ($i * 1.609) . "</td>";
            echo "<td>$i2</td>";
            echo "<td>" . ($i2 * 1.609) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
 
    ?>
</body>
</html>