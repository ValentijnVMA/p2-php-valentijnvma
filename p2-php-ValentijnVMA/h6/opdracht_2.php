
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 
    session_start();
    $paginaNaam = 'voorbeeld_pagina';
    if (!isset($_SESSION)) {
        $_SESSION[$paginaNaam] = 1;
    } else {
        $_SESSION[$paginaNaam]++;
    }
    echo "Deze pagina heb je al " . $_SESSION[$paginaNaam] . " keer bekeken voordat je de inernet browser hebt afgesloten";
 
    echo "<br>";
    echo "<br>";
 
    setcookie("numbervisit", $_SESSION[$paginaNaam], time() + 3600);
    echo "in totaal heb je deze pagina al: " . $_COOKIE["numbervisit"] . " keer bekeken";
    ?>
</body>
</html>