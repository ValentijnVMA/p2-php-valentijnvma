<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
    $var1 = 25;
    $var2 = 15;
    if ($var1 > $var2) {
        $result = $var1 * 2 + $var2;
    } else {
        $result = $var2 * 2 + $var1;
    }
    echo "Uitkomst: ", $result;
    ?>
</body>
</html>