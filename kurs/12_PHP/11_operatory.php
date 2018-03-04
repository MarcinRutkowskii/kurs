<?php
//operatory arytmetyczne

$x = 2;
$y = 3;
$mnozenie = $x * $y; //8


$potegowanie = $x ** $y;
$potegowanie = 2 ** 10;//1024
$dzielenie = $x / $y; //0,6666666
$dzielenie = round($dzielenie,2);//0,67
$dodawanie = $x + $y; //5
$odejmowanie = $x - $y;//-1
$modulo = $x % $y;

echo $mnozenie;
echo $potegowanie;
echo $dzielenie;
echo $dodawanie;
echo $odejmowanie;
echo $modulo;
//inkrementacja, dekrementacja

$x = 2;
echo $x++; //2
echo ++$x; //4 preinkrementacja juz ma 3 na poczatku
echo $x; //4
$y = $x++;
echo $y; //4
$y = ++$x;
echo $y; //6
echo ++$y; //7
echo '<br>';
//operatory logiczne
//and, or, xor, !, &&, ||,
//najwazniejsza jest kolejnosc np and jest wazniejszy od tego ||(tez znaczy and) czyli and bedzie wykoanne w pierwszej kolejnosci niz ||

//zad 1 sprawdz czy w sklepie kupisz rower

$sklep = true;
$pieniadze = 1800;
$rower = true;

if($sklep == 'otwarty' && $pieniadze > 1000 && $rower){
    echo 'kupiles rower';
}else{
    echo 'idz pieszo';
}
echo '<br><br>';
//zad 2 uzytkownik chce kupic rower lub hulajnoge

$sklep = false;
$pieniadze = 1401;
$rower = true;
$hulajnoga = false;
if($sklep && $pieniadze > 1400 && ($rower or $hulajnoga)){
    echo 'kupiles rower i hulajnoge';
}else if($rower && $sklep && $pieniadze > 900)
    echo 'kupiles rower';
else if($hulajnoga && $sklep && $pieniadze > 500)
    echo 'kupiles hulajnoge';
else{
    echo 'nic nie kupiles';
}
echo '<br>';

//operatory relacyjne
//==, ===, <> (rozne), !=, >, <, >=, <=, <=> (spaceship operator);

$a = 1;
$b = 2;
$c = '1';
$d = 1;

$wynik = $a == $c; //true
$wynik = $a === $c; //false
$wynik = $a === $d; //false
$wynik = $a <> $c; //false
$wynik = $a <> $b; //true
$wynik = $a != $b; //true
$wynik = $a !== $d; //false
$wynik = $a !== $c; //true
$wynik = $a > $b; //false
$wynik = $a >= $b; //false
$wynik = $a < $b; //true
$wynik = $a <= $b; //true

//operator od PHP 7 <=> spaceship operator sprawdza czy liczba jest wieksza,mniejsza lub równa
$a = 2;
$b = 10;
$wynik = $a <=> $b;
echo $wynik;
echo '<br>';

//-1 oznacza , ze pierwsza wartosc jest mniejsza od drugiej

//echo getytype($c);
//echo $wynik;

##############################################

$x = null;
$y = 'test';
$z = 7;

$wynik = $x ?? $y ?? $z; //wyswietla pierwsza wartosc jaka jest
echo $wynik;
?>
