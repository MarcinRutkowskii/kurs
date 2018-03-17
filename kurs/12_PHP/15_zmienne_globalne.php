<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zmienne globalne</title>
</head>
<body>

   <?php
#########################zmienne globalne#######################
        $l = 10; //zmienna globalna
//        echo $l;
        function zmien(){
//            echo "Wartosc \$l w funkcji wynosi: $l"; błąd
//            echo "Wartosc \$l w funkcji wynosi: $GLOBALS[l]"."<br>"; pierwszy sposob
//            echo "Wartosc \$l w funkcji wynosi: {$GLOBALS['l']}"."<br>"; jezeli jest white space to dawac w klamre
            echo "Wartosc \$l w funkcji wynosi:".$GLOBALS['l']."<br>"; // trzeci sposob, z kropka;konkatenacja

        }
    echo zmien();
    echo "Wartosc zmiennej poza funkcja wynosi: $l"."<br>";

############################zmienne lokalne#############

    function f(){
        $liczba = 20;
        echo "zmienna liczba wynosi wewnatrz funkcji: $liczba"."<br>";
    }
    f();
//    echo "zmienna liczba wynosi poza funkcją: $liczba"; błąd


#######################zmienne statyczne #####################

    function suma(){
        $x = 4;
        $x += 10; // $x = $x + 10 - to samo
        echo "Zmienna \$x wynosi: $x"."<br>";
    }
    suma();//14
    suma();//14
    suma();//14

    function suma1(){
        static $y = 4; //static - przy kazdym wywyolaniu funkcji bedzie modyfikowana zawartosc zmiennej
        $y += 10;
        echo "Zmienna \$y wynosi: $y<br>"; // \zmienia w stringa zmienną
    }
    suma1();//14
    suma1();//24
    suma1();//34

    ##################### przekazywanie argumentów #############

    //przekazywanie argumentow przez wartość

    function dodajTrzy($l){
        $l = $l + 3;
    }

    $liczba = 5;
    echo "\$liczba przed wywolaniem funkcji wynosi: $liczba<br>";//5

    dodajTrzy($liczba);
    echo "\$liczba po wywolaniu funkcji wynosi: $liczba<br><br>";//5

    //przekazywanie argumentow przez referencje & - WAZNE
    //& zamieniamy wartosc funkcji przez liczenie w pamięci
        function dodajCztery(&$l){
        $l = $l + 4;
    }

    $liczba = 5;
    echo "\$liczba przed wywolaniem funkcji wynosi: $liczba<br>";//5

    dodajCztery($liczba);
    echo "\$liczba po wywolaniu funkcji wynosi: $liczba<br>";//9

############################ argumenty domyślne##################

    function dodaj($x,$y=4){
        return $x +$y;
    }
    $a = 3;
    echo dodaj(2,6); //8
    echo "<br>";
    echo dodaj($a,$a); //6
    echo "<br>";
    echo dodaj($a); //7 bo ma4 jakodomyslna wartosc
    echo "<br>";

############### argumenty i typy danych #########################

    function mnozenie(int $x, int $y = 5){
        return $x * $y;
    }
    echo mnozenie(1); //5
    echo mnozenie(3,5); //15
    echo mnozenie(3.5,4); //12 bo ucial poprzecinku bo liczba rzeczywista integer narzucona na poczatku
    echo "<br>";

//zad.1
//napisz funkcje ktora bedzie przyjmowala dwa argumenty liczbowe z formularza na ekranie pod formularzem bedzie zwrocony mniejszy z nich np. najmniejsza wartosc :. Podnies pierwszy podany argument do potegi drugieg argumentu i wyswietl w formacie :"3 do <indeks gorny>10 wynosi...."



    ?>
    <form method="post">
        <input type="number" name="x">Liczba 1<br>
        <input type="number" name="y">Liczba 2<br>
        <input type="submit" name="przycisk" value="Wprowadz">
    </form>
    <?php
        function potega($x,$y){

            return pow($x,$y);

        }
    //zaleznie od metody w formularzu uzyc post lub get
        function minimalna($x,$y){
            return min($x,$y);
        }
        if(isset($_POST['przycisk']) && !empty($_POST['x']) && !empty($_POST['y'] || $_POST['y'] == 0)){
            $x = $_POST['x'];
            $y = $_POST['y'];
            echo"Najmniejsza wartosc:".minimalna($x,$y)."<br>";
            echo"$x<sup>$y</sup>wynosi:".potega($x,$y)."<br>";
        }
    ?>
</body>
</html>
