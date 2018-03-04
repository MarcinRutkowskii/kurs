<?php
    $zmienna = 'Janusz';
    $zmienna = 'Agata';
    echo "$zmienna<br>";

    define("PI", 3.14159);
    echo PI."<br>";
    //PI = 3.14;  stałej nie możemy zmienić wartości

    const NARODOWOSC = 'polska';
    echo NARODOWOSC;

/*
    Utwórz zmienną imie,
    dwie stałe: miasto, kraj (dodaj swoje dane),
    Dane wyświetl w formacie:

    Imię: .....
    Miasto: ....
    Kraj: .....
*/

    $imie = 'Janusz';
    define('MIASTO','Poznań');
    define('KRAJ','Polska');

    echo "<br>Imię: $imie<br>";
    echo "Miasto: ".MIASTO."<br>";
    echo "Kraj: ".KRAJ."<br>";
?>
