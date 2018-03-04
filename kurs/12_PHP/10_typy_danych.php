<?php
 $z1 = 10; //$ znak zmiennej
echo "wartość zmiennej \$z1 wynosi: $z1 <br>"; //backslash \ powoduje potraktowanie zmiennej jako tekst
echo "typ danych zmiennej \$z1: ";
echo gettype($z1); //integer liczba całkowita

$z2 = 5.15;
echo "<br>wartość zmiennej \$z2 wynosi: $z2 <br>";
echo "typ danych zmiennej \$z2: ";
echo gettype($z2); //double liczbna zmiennoprzecinkowa

$z3 = 'tekst';
echo "<br>wartość zmiennej \$z3 wynosi: $z3 <br>";
echo "typ danych zmiennej \$z3: ";
echo gettype($z3); //string

$z4 = true;
echo "<br>wartość zmiennej \$z4 wynosi: $z4 <br>";
echo "typ danych zmiennej \$z4: ";
echo gettype($z4); //boolean

$z5 = array('biały', 'czerwony', 'zielony', 'żółty'); //array to tablica
echo "<br><br>Wartość zmiennej \$z5 wynosi:";
echo print_r($z5); //print_r wyswietla tablice
echo'<br>';
echo"Typ danych zmiennej \z$5: ";
echo gettype($z5);
echo '<br>';

#########################################################
if(is_int($z1)){
    echo "<br>Zmienna \$z1 jest typu calkowitego"; //jak jest jedna instrukcja to może być bez klamr
}else{
    echo "Zmienna \$z1 nie jest typu calkowitego";
}

if(is_double($z2)){
    echo "<br>Zmienna \$z2 jest typu zmiennoprzecnikowego";
}else{
    echo "Zmienna \$z2 nie jest typu zmiennoprzecinkowego";
}

if(is_float($z2)){
    echo "<br>Zmienna \$z2 jest typu zmiennoprzecnikowego";
}else{
    echo "Zmienna \$z2 nie jest typu zmiennoprzecinkowego";
}

if(is_bool($z4)){
    echo "<br>Zmienna \$z4 jest typu boolean";
}else{
    echo "Zmienna \$z4 nie jest typu boolean";
}

if(is_string($z3)){
    echo "<br>Zmienna \$z3 jest typu string";
}else{
    echo "Zmienna \$z3 nie jest typu string";
}

if(is_array($z5)){
    echo "<br>Zmienna \$z5 jest typu array";
}else{
    echo "Zmienna \$z5 nie jest typu array";
}
// wphp konkatenacja bedzie dopiero ja ksie doda kropke


?>
