<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ciagi znakowe</title>
</head>
<body>
    <?php
        $liczba = 10;
        $ciag ='test';
        $wiek = 25;

        $text1 = "\$liczba wynosi: $liczba";
        $text2 = "\$liczba wynosi: $liczba";

############################# heredoc ################################################

        $text3 = <<<"ID"
        Masz $wiek lat
ID;
    echo $text3;
    echo "<br>";

##################### nowdoc #############################################

        $text4 = <<<'TEKST'
        Masz $wiek lat
TEKST;

    echo $text4;
    echo "<br>";

    echo <<<TEST
        Janusz $wiek
TEST;
    echo"<br>";

    $s1 ='abc';
    $s2 = 'def';

    //s3$ = $s1 + $s2; //blad
   // echo = $s3; //blad

    $s3 = $s1.$s2;
    echo $s3;
    echo "<br>";

    echo $s1,$s2,$wiek //najwolniejsza

//szybkosc wyswietlania ciągów znakowych
//heredoc ze zmienną - najszybsza metoda w PHP 7, pozniej cudzysłów, potem heredoc bezpośrednio, potem apostrof, najwolniejsza przecinek (pieciokrotnie wolniejsza od pozostalych)
    ?>

    <form>
        <input type="text" name="kraj" placeholder="kraj">
        <input type="number" name="wiek" placeholder="wiek">
        <input type="text" name="imie" placeholder="imie">
        <input type="submit" name="przycisk">

    </form>
<?php

    if (isset($_GET['kraj'])){
        $panstwo = $_GET['kraj'];
    }else{
        $panstwo = 'brak';
    }

    echo "Twoj kraj: $panstwo<br>";

    $wiek = $_GET['wiek'] ?? 'brak'; //?? - oznacza w przeciwnym razie, od PHP 7
    echo "Twój wiek: $wiek";

   $imie = isset($_POST['imie']) ? $_GET['imie'] : 'brak imienia'; //isset jeśli istnieje
                                                                    // jeśli istnieje zmienna post to przypisz get a w przeciwnym razie brak imienia

    //$imie = isset($_POST['imie']) ?? $_GET['imie'] ?? 'brak imienia'; // czy istnieje i zwraca wartosc true albo false
    echo "<br>Twoje imie: $imie";

############################################### spaceship ####################################################

    $a = 'a';
    $b = 'b';

    echo $a <=> $b; //a jest mniejsze ob wiec wynik -1
    echo 'c' <=> 'c'; //0 bo są identyczne
    echo 'd' <=>'c'; //1 bo d jest wieksze
    echo "<br>";

################################## grawis, lewy apostrof ################################################

    $polecenie = `dir /ah`; //wyswietla to co mozna w konsoli cmd razem z `, attrib ah pokazuje ukryte pliki
                            //attrib -h odkrywa wszystko ukryte
    //$polecenie = `echo janusz > test.txt`; // tworzy nowy plik
    //echo $polecenie;
    echo "<pre> $polecenie </pre>";
    echo "<br>";

################################## nl2br() ###############################################

    $wiersz = <<<ID
    Mam
    na
    imie
    Janusz
ID;

    echo "<h3>Przed uzyciem funkcji nl2br</h3>"; //nl2br - new line to break
    echo $wiersz;
    echo "<h3>Po uzyciu funkcji nl2br</h3>";
    echo nl2br($wiersz);
    echo "<br";

####################### funkcje zmieniajace wielkosc ######################################################

    $ciag = "maM nA iMię janUsZ";
    echo $ciag; //lepiej tak zrobic brake niz "<br>".$ciag bo . to tez jakas operacja i zajmuje pamiec
    echo "<br>";
    $male = strtolower($ciag);
    $duze = strtoupper($ciag);
    $pierwszaDuza = strtolower($ciag);
    $pierwszaDuza = ucfirst($pierwszaDuza);
    $wyrazy = ucwords($pierwszaDuza);

    echo "<br>";
    echo $wyrazy;

    ?>
    <!--//zad.1- uzytkownik podaje w formularzu swoje imie i nazwisko, zamien wszystkie dane na male litery a pierwsza na wielka litere, zabezpiecz przed brakiem podania danych,zabezpiecz przed blednymi danymi w polu text, ogranicz wprowadzanie danych do liter w imieniu (male lub duze) ogranicz wprowadzanie danych do liter i myslnika w nazwisku, wyswietl dane w formacie: imie:....,nazwisko:... np imie:Jan, nazwisko: Kowal imie max 15 znakow, nazwisko max 40 znakow-->
    <form method="post">
        <input type="text" name="imie1" placeholder="imie" pattern="([a-z]|[A-Z]){2,20}">
        <input type="text" name="nazwisko1" placeholder="nazwisko" pattern="([a-z]|[A-Z]){2,20}(-{1}([a-z|[A-Z]]){2-20})?">
        <input type="submit" name="guzik">

    </form>
    <?php

        $imie1 = $_POST['imie1'] ?? 'brak danych';
        $nazwisko1 = $_POST['nazwisko1'] ?? 'brak danych';
        $imie1 = ucfirst($imie1);
        $nazwisko1 = ucfirst($nazwisko1);
        echo "Twoje imie: $imie1 <br> Twoje nazwisko: $nazwisko1";
        if (empty($_POST['imie1']) && empty($_POST['nazwisko1'])){
            echo "<br><b>Brak danych!";
        }


//    if (isset($_POST['imie']) && isset ($_POST['nazwisko'])){
//        $imie = $_POST['imie'];
//        $nazwisko= $_POST['nazwisko'];
//        $imie = ucfirst($imie);
//        $nazwisko = ucfirst($nazwisko);
//        echo "imię: $imie nazwisko: $nazwisko";
//        if (isset($_POST['imie']) && isset ($_POST['nazwisko']) == null){
//            echo "Nic nie podales!";
//        }
//    }


    ?>
</body>
</html>
