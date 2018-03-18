<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tablice</title>
</head>
<body>
    <?php

##################### tablice indeksowane numerycznie WAZNE DO EGZAMINU###############################

    $kolory = array('biały', 'zielony', 'czerwony','aqua');
    echo "Ilośc elementów w tablicy: ".count($kolory)."<br>";
    echo "Początkowa zawartość tablicy: <br> ";


//    $kolory[0] = 'czarny';
//    for ($i=0; $i<count($kolory); $i++):
//    $y = $i +1;
//    echo "Element[$y]:".$kolory[$i]."<br>";
//    endfor;

    function tablica($v){ //funkcja uniwersalna dla wyswietlania tablic
    for ($i=0; $i<count($v); $i++):
    $y = $i + 1;
    echo "Element[$y]: $v[$i] <br>";
    endfor;

    }

    tablica($kolory);

    $auta =['Ferrari', 'Bugatti','Lexus'];

    tablica($auta);

    ################### tablice asocjacyjne####################

    $dane = array (
        'imie'=>'Janusz',
        'nazwisko'=>'Nowak',
        'miasto'=>'Poznan',
        'wiek'=>18
    );

    //echo $dane [0]; //błąd
    echo $dane['imie']."<hr>"; //wpisujemy klucz

    $z = <<<TAB
    Imie: $dane[imie]
    Nazwisko: $dane[nazwisko]
    Wiek: $dane[wiek]
TAB;
    echo nl2br($z);

########################## for each WAZNE####################
    echo "<br>Foreach<br>";
    foreach($dane as $wartosc){
        echo"Wartosc: $wartosc<br>";
    }

    foreach($dane as $klucz =>$wartosc){ //=> wskazujemy wartosc tego klucza
        ucfirst($wartosc);
        echo "$klucz: $wartosc<br>";
    }
    echo "<hr>";
########## tablica wielowymiarowa PRZYDATNE ############
  $cyfry = array(
      array  (1,2,3,4),
      array  (5,6,7),
      array  (8),
      array  (9,10)
  );
    foreach ($cyfry as $wartosc){
        foreach ($wartosc as $x){ //dokopujemy sie glebiej w tablicy do drugiej tablicy
            echo "$x ";
        }
        echo "<br>";
    }

################# Sortowanie ##############################


$tab = array(10,1,5,7,8,33,52);
    function cyfry($tab){
        foreach ($tab as $cyfry){
            echo "$cyfry ";
        }
        echo "<br>";

    }
    cyfry($tab);
 //rosnąco

    sort($tab);
    cyfry($tab);

//malejąco

    rsort($tab);
    cyfry($tab);

########################################################

    $tab = array('Julia','Anna','Tomek','Martyna');

     function imiona($tab){
        foreach ($tab as $imiona){
            echo "$imiona ";
        }
        echo "<br>";

    }

    imiona($tab);
    sort($tab);
    imiona($tab);

    ########################################################

    $tab = array('Julia','anna','Tomek','Martyna');

    imiona($tab);
    sort($tab);
    imiona($tab);

################### sortowanie tablicy asocjacyjnej#############



    $nazwiska = array(
        'pierwszy' =>'2nowak',
        'drugi' =>'kowal',
        'trzeci' =>'ananas',
        'czwarty' =>'zajac'

    );
        function nazwiska($nazwiska){
        foreach ($nazwiska as $n){
            echo "$n ";
        }
        echo "<br>";

    }
    nazwiska($nazwiska);
    //asort($nazwiska);  //asort do sortowania tablicy asocjacyjnejwedlug wartosci
    //arsort($nazwiska);//w odwrotnej kolejnosci
    //ksort($nazwiska); //wedlug wartosci indeksu czwarty bo c potemdrugi bo d itp
    //krsort($nazwiska); //od ostatniej wartosci indeksu
    nazwiska($nazwiska);

#######################wyswietlanie tablicy ###################

    $tab4 = array(2,1,56,'Janusz',3,8);
    echo "<br>";

    var_dump($tab4);

    echo "<br>";

    print_r($tab4);

    echo "<pre";
        print_r($tab4);
    echo "</pre>";

//zad.1 uzytkownik z formularza wysyla dane: imie, nazwisko, wiek,miasto. zapisz dane w tablicy asocjacyjnej, klucze nazwij jak powyzej.
//utworz funkcje zawierajaca heredoc i wyswietlajaca informacje ponizej : jesteś[imie] [nazwisko] masz [wiek]lat, mieszkasz w [miasto]
echo "<br><br><hr>"
    ?>
<form>
    <input type="text" name="imie" placeholder="imie">
    <input type="text" name="nazwisko" placeholder="nazwisko">
    <input type="number" name="wiek" placeholder="wiek">
    <input type="text" name="miasto" placeholder="miasto">
    <input type="submit" name="przycisk">

</form>
<?php
    if(isset($_GET['przycisk']) && !empty($_GET['imie']) && !empty($_GET['nazwisko']) && !empty($_GET['wiek']) && !empty($_GET['miasto'])){
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $wiek = $_GET['wiek'];
    $miasto = $_GET['miasto'];

$pierdoly = array(
    'imie' => $imie,
    'nazwisko' => $nazwisko,
    'wiek' => $wiek,
    'miasto' => $miasto
);

function pierdola($i,$n,$w,$m){
  echo <<<G
  <b>jesteś $i $n masz $w lat, mieszkasz w $m
G;
}

    pierdola($pierdoly['imie'], $pierdoly['nazwisko'], $pierdoly['wiek'], $pierdoly['miasto']);
    echo "<br>";
    print_r($pierdoly);
}

    echo"<br><br><hr><br>";

    ?>
<!--    //zad 2 uzytkownik wprowadza przynajmniej 1 kolor na 3 mozliwe-->

<form>
    <input type="text" name="kolor1" placeholder="kolor1" pattern="[a-z]{3-20}">
    <input type="text" name="kolor2" placeholder="kolor2"pattern="[a-z]{3-20}" >
    <input type="text" name="kolor3" placeholder="kolor3" pattern="[a-z]{3-20}">
    <input type="submit" name="przycisk1">

</form>

<?php

    if(isset($_GET['przycisk1']) && !empty($_GET['kolor1']) || !empty($_GET['kolor2']) || !empty($_GET['kolor3'])){
        $kolorki = [];

            $k = !empty($_GET['kolor1']) ? 1:0;
                if(!empty($_GET['kolor1']))
                $kolorki[] = $_GET['kolor1'];
            $k += !empty($_GET['kolor2']) ? 1:0;
                if(!empty($_GET['kolor2']))
                $kolorki[] = $_GET['kolor2'];
            $k += !empty($_GET['kolor3']) ? 1:0; //+= sumuje sobie
                if(!empty($_GET['kolor3']))
                $kolorki[] = $_GET['kolor3'];
        if($k >= 2)
            echo "wprowadziles $k kolory<br>";
        else
            echo "wprowadziles $k kolor<br>";
        foreach ($kolorki as $k => $d){
            $x = ++$k;
            echo "$x kolor: $d <br>";


        }

}

?>
<!--zad.1. uzytkownik wprowadza z klawiatury do tablicy sowje imie i nazwisko z formularza, oblicz ile lacznie znakow wprowadzil, jsli przekroczyl liczbe 20 to popros go o ponowne wprowadzenie danych, jesli wprowadzil prowaidlowo to sprawdz czy znajduja sie tam polskie znaki, oblicz ile ich jest,zmaien wszystkie znaki na male i zmien pierwsza litere na wielka

zad2.napisz skrypt ktory bedzie wyswietlal liczbe dnw pozostalych do konca biezacego roku

zad3.napisz skrypt obliczajacy czas generowania strony w ktorej bedzie pętla wyswietlajaca wszystke liczby parzyste z przedizalu podanego przez uzytkownika z klawiatury

zad.4 napisz sktpt obliczajacych liczbe elementow podzielnych przez 5 w tablicy y
pisz ile ich i i
zad 5 napisz skrypt w ktorym para podaje date swojego pierwszego spotkania wyswietl ile dni sa juz razem

-->
</body>
</html>
