<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaargeld Analyse</title>
</head>
<body>
    <?php
    // Variabele voor het bedrag spaargeld in euro's
    $spaargeld = 1250;

    // Variabelen voor drempelbedragen in euro's
    $telaag = 750;
    $genoeg = 1000;

    // Valutasymbool voor euro
    $currency = '€';

    // Toon het huidige spaargeld
    echo "Je spaargeld is nu: ", $currency, $spaargeld, ", ";

    // Controleer de spaargeldcondities en geef passende berichten weer
    if ($spaargeld < $telaag) {
        echo "wees zuiniger op je geld!";
    } else if ($spaargeld < $genoeg) {
        $nogNodig = $genoeg - $spaargeld;
        echo "spaar nog wat meer geld, nog ", $currency, $nogNodig, " nodig.";
    } else {
        $overig = $spaargeld - $genoeg;
        echo "je hebt genoeg geld en ", $currency, $overig, " over.";
    }
    ?>
</body>
</html>
