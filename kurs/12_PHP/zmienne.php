<?php
    $a = 1;
    $_liczba = 15;
    $liczba2 = 10;
    $imie_ = "Janusz";
    $Imie_ = "Anna";
    $Imię = "Tomek";    //dozwolone, ale nie polecane polskie znaki !!!

    echo "Twoje imię<br>";
    echo "Twoje imię: $imie_ <br>";
    echo 'Twoje imię: $imie_ <br>';

//typ skalarny
//typ boolean

    $prawda = true;
    $falsz = false;

//typ integer

    $calkowita = 50;
    $szesnastkowa = 0xA;
    $osemkowa = 016;
    $binarna = 0b1010;

    //echo $binarna;

//typ float

    $zmienna = 10.7;
    //echo "$zmienna<br>";
    echo $zmienna."<br>";

//składnia heredoc

    $imie = "Filip";
    $napis = <<<TEKST
        Mam na imię $imie
        TEKST<br>
TEKST;

    echo $napis;

//składnia nowdoc

    $nazwisko = "Kowal";
    $tekst = <<<'ETYKIETA'
    Moje nazwisko: $nazwisko
ETYKIETA;

    echo $tekst;

?>
