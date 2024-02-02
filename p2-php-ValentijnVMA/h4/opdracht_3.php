<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
    $var4 = 40;
    $var5 = 15;
    if ($var4 > $var5) {
        $result = $var4 * 2 + $var5;
    } else {
        $result = $var5 * 2 + $var4;
    }
    echo "Uitkomst: ", $result;
    ?>
</body>
</html>