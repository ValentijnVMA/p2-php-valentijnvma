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
 
    $paginabekeken = 'pagina';
   
    if (!isset($_SESSION[$paginabekeken])) {
        $_SESSION[$paginabekeken] = 1;
    } else {
        $_SESSION[$paginabekeken]++;
    }
   
    echo "Deze pagina heb je al " . $_SESSION[$paginabekeken] . " keer bekeken voordat je de internet browser hebt afgesloten";
    ?>
</body>
</html>
