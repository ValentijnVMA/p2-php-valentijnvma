<html>
    <head>
        <title>Hello world</title>
    </head>
    <body>
        <?php
        //standaard tijdzone  in op Europa/Amsterdam
            date_default_timezone_set("Europe/Amsterdam");
 
            //haalt datum op  dag month year
            $today = date("j F Y");
            echo "Vandaag is het: $today";
 
            echo "<br>";
 
            //huidige tijd
            $time = date("H:i");
            echo "Het is nu: $time uur";
 
            echo "<br>";
 

            //haalt huidige maand op in form  F 
            $month = date("F");

            //aantal dagen in de maand
            $daysInMonth = date("t");
            echo "Deze maand, $month heeft $daysInMonth dagen";
 
            echo "<br>";
 // huidige week met weektal
            $week = date("W");
            echo "Deze week is het week: $week";
        ?>
    </body>
</html>