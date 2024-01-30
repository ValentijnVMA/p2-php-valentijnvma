<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $spaargeld = 1250;
    echo "Je spaargeld is nu: ", $spaargeld," euro, ";
    if ($spaargeld < 750) {
        echo "go get a job";
    } else if ($spaargeld < 1000 && $spaargeld > 750) {
        echo "bittle bittle more money ", 1000 - $spaargeld;
    } else if ($spaargeld > 1000) {
        echo "je hebt genoeg geld en ", $spaargeld - 1000, " over";
    }
    ?>
</body>
</html>