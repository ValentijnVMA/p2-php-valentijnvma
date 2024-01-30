<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $uur = date("H");
    if ($uur >= 6  && $uur < 12) {
        echo "Het is ochtend";
    } else if ($uur >= 12  && $uur < 18) {
        echo "Het is Middag";
    } else if ($uur >= 18  && $uur < 24) {
        echo "Het is Avond";
    } else if ($uur >= 24  && $uur < 6) {
        echo "Het is Nacht";
    }
    ?>
</body>
</html>