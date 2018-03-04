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
echo '<br>';
//operatory łańcuchowe

$tekst1 = 'Jan';
$tekst2 = 'Kowal';
echo $tekst1.' '.$tekst2.'<br>';
echo $tekst1,'jan';
echo '<br>';

//operatory przypisania
//=, +=, -=, *=, /=, %=, .=,
//istnieja rowniez operatory bitowe

$a = 5;
echo gettype($a);//integer
$a .= '';
echo gettype ($a);
$b = 10;
echo gettype($b); //integer
$a += $b; // $a = $a+$b;//15
$b .= $a; // $b = 10 + 15 = 1015
echo $b;
echo gettype($b); //string
echo'<br><br>';
############################################
//operator warunkowy

$x = 5;
$wynik = ($x > 2)?'x wieksze od 2': 'x nie jest wieksze od 2'; // ? oznacza ze cos sprawdzamy, : oznacza else, 3 operandowy operator warunkowy, lepiej to stosowac zamiast else if, bo tak robia lepsi programisci
echo $wynik;
echo '<br><br>';

####################################
//operatory rzutowania (konwersji typów)
//int integer, float double real, bool boolean, string, array, object, unset
$x = '2';
echo gettype($x); //string
echo'<br>';
$x = (int)$x;
echo gettype($x);//integer
echo '<br>';
$x = (double)$x;
echo gettype($x);//double
echo '<br>';
$x = (unset)$x;
echo gettype($x);//NULL
echo '<br><br>';
//priorytety operatorów 23 typy
//&& ma wiekszy priorytet niz AND
//|| ma wiekszy priorytet niz OR
##################################################
//konwersja typów jawna lunb niejawna

$napis = 'Janusz';
echo gettype($napis); //jawna zmiana

$napis = 10;
echo gettype($napis); //niejawna zmiana typow danych
echo'<br><br>';

//funkcje konwersji
//intval(), floatval(), doubleval(), stringval(), boolval()

$liczba = 2.5;
//$liczba=(int)$liczba;
$liczba = intval($liczba);
echo gettype($liczba).' '.$liczba;
echo '<br>';
//settype()

$liczba1 = 10.5;
settype($liczba1,'int'); //settype nie wolno przypisywac do zmiennej bo wyswietli ze sie wykonala i wyswietli true
//if(settype($liczba1,'int))
//  echo 'poprawna konwersja';
//echo get type($liczba1);

//echo $liczba1.gettype($liczba1);
echo gettype($liczba1);
echo '<br>';
$liczba2 = 5;
settype($liczba2,'double');
echo gettype($liczba2);
echo'<br>';

$liczba3 = 0;
settype($liczba3,'bool');
echo $liczba3; //false, taka zasada,ze przy konwersji wartosci nie przypisanej lub o wartosci 0 wyjdzie false przy tej funkcji


?>
