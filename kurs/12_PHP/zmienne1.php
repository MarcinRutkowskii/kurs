<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zmienne</title>
</head>
<body>
    <?php
        $liczba = 100;
        $drugaLiczba = 10.5;
        $tekst = 'Egzmain E.14';

        echo $liczba;
        echo "<br>";
        echo $drugaLiczba;
        echo "<br>";
        echo $tekst;
        echo "<br>";

        echo "$liczba<br>$drugaLiczba<br>$tekst<br>";
        echo $liczba."<br>".$drugaLiczba."<br>".$tekst."<br>";
        echo $liczba,"<br>",$drugaLiczba,"<br>",$tekst,"<br>";

    echo <<<T
        $liczba<br>$drugaLiczba<br>$tekst<br>
T;

    ?>
</body>
</html>
