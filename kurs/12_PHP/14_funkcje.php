<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
        //ścisła kontrola typów danych
    //declare(strict_types=1);

        function f(){
            echo "janusz<br>";
        }
    f();

        function wyswietl($x){
            echo "zmienna wynosi:$x<br>";
        }
    wyswietl(3);
    $test=12;
    wyswietl($test);//12

    function suma($x,$y){
        $wynik = $x + $y;
        echo "Suma $x i $y wynosi: $wynik <br>";
    }

    suma(2,5);//7

    function suma1($x,$y){
        return $x + $y;
    }

    echo "Suma: ".suma1(13,4)."<br>";
    echo "Średnia: ".suma1(13,7)/2; //10
    echo "<br>";

    function f1(){
        echo "test<br>";
        return; //przerywa funkcje w tym miejscu
        echo "janusz<br>";
    }
    f1();

    function calkowita($a){
        return $a;
    }
    echo calkowita(15.5);
    echo "<br>";
    $one = calkowita(20.5);
    echo $one;
    echo gettype($one);
    echo "<br>";

    function calkowita1($a):int{
        return $a;
    }
    echo calkowita1(15.5);
    echo "<br>";
    $two = calkowita1(20.5);
    echo $two;
    echo "<br>";
    echo gettype($two);
    echo "<br>";

    function rzeczywista($x):float{
        return $x;
    }
    echo"<br>";
    echo rzeczywista(4.33);
    $z = rzeczywista(5.55);
    echo gettype($z);
    echo "<br>";

    function nowa():int {
        return 1.25;
    }
    echo nowa();
    echo "<br>";



    ?>
</body>
</html>
