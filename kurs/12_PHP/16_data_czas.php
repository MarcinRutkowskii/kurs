<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Data i czas</title>
</head>
<body>

    <?php
    ##########################funkcja date ###################
        //wyswietlanie czasu i daty
        echo 'rok - miesiac-dzien: '.date("Y-m-d");//rok - miesiac-dzien
        echo date("d-m-Y")."<br>";//17-03-2018
        echo date("j M Y")."<br>";//17 Mar 2018
        echo date("jS, M Y")."<br>";//17th, Mar 2018
        echo date("G:i:s")."<br>";//14:23:48
        echo date("h:i:sa")."<br>";//02:24:23pm najlepszy sposob
        echo date("Y-m-d G:i:s")."<br>"; //2018-03-17 14:25:32 najlepszy format na egzamin
        echo date("w")."<br>";//6 bo 6 dzien tygodnia
  ########################## funkcja getdate ############################

        $data = getdate(); //to jest jakby tablica- array- trzeba z niej wyciagnac informacje
        $dzien = $data['mday'];
        if ($dzien < 10){
            $dzien = "0".$dzien;
        }
        $miesiac = $data['mon'];
        if ($miesiac < 10){
            $miesiac = "0".$miesiac;
        }
        $rok = $data['year'];

        $dzienTygodnia = $data["wday"];

        //echo $dzien." ".$miesiac." ".$rok." ".$dzienTygodnia;
//zadanie 1.
//wyswietl date w nastepujacym formacie, 17 marzec 2018|sobota


        switch ($miesiac){
            case 1: $miesiac = 'styczeń';
            break;
            case 2: $miesiac = 'luty';
            break;
            case 3: $miesiac = 'marzec';
            break;
            case 4: $miesiac = 'kwiecień';
            break;
            case 5: $miesiac = 'maj';
            break;
            case 6: $miesiac = 'czerwiec';
            break;
            case 7: $miesiac = 'lipiec';
            break;
            case 8: $miesiac = 'sierpień';
            break;
            case 9: $miesiac = 'wrzesień';
            break;
            case 10: $miesiac = 'pazdziernik';
            break;
            case 11: $miesiac = 'listopad';
            break;
            case 12: $miesiac = 'grudzien';
            break;
        }
        switch ($dzienTygodnia){
            case 1: $dzienTygodnia = '|poniedziałek';
            break;
            case 2: $dzienTygodnia = '|wtorek';
            break;
            case 3: $dzienTygodnia = '|środa';
            break;
            case 4: $dzienTygodnia = '|czwartek';
            break;
            case 5: $dzienTygodnia = '|piatek';
            break;
            case 6: $dzienTygodnia = '|sobota';
            break;
            case 7: $dzienTygodnia = '|niedziela';
            break;
        }
    echo $dzien." ".$miesiac." ".$rok." ".$dzienTygodnia."<br>";

########################### mktime #################################

$rok1 = 2018;
$miesiac1 = 3;
$dzien1 = 17;

$rok2 = 1990;
$miesiac2 = 3;
$dzien2= 17;

$time1 = mktime(0,0,0,$miesiac1,$dzien1,$rok1); // tyle czasu uplynelo od 1970 roku
$time2 = mktime(0,0,0,$miesiac2,$dzien2,$rok2);
$time = abs(ceil(($time1 - $time2)/86400));
echo $time1."<br>";
echo $time2."<br>";
echo $time."dni pomiedzy time1 a time 2<br>";


######################### microtime ###############################

/*$t1 = microtime(true);

for ($i = 0; $i < 20000; $i++)
    for ($j = 0; $j < 1000; $j++)


$t2 = microtime(true);

$t = round($t2 - $t1,4);
echo "skrypt wykonywał się: ".$t." sekundy";  */

######################string to time######################

echo strtotime("now");//1521296263
echo strtotime("28 january 1995")."<br>";//791247600
echo strtotime("-1 day")."<br>"; //1521210254
echo strtotime("+3day 5 hours 14 minutes 10 seconds")."<br>"; //1521210412
echo strtotime("next saturday")."<br>"; //1521846000


?>

<form method="get">
        <input type="date" name="data">data<br>
        <input type="submit">
    </form>
<?php
    if (isset ($_GET['data'])){
        echo $_GET['data']."<br>";
        echo strtotime($_GET['data'])."<br>";
    }

//napisz skrypt ktory bedzie wyswietlal strone w zaleznosci od pory dnia wykorzystaj instrukcje include. od 6 do 18 dzien 16_dzien.php dobry a od 18 - 6 dobry wieczor 16_wieczor.php
?>
<form method="get">
        <input type="text" name="imie">imie<br>
        <input type="submit">
    </form>
<?php

    $godzina = date("G");

    if ($godzina <= 18 && $godzina >= 6){
        echo "Dzień dobry:";
    }else{
        echo"Dobry wieczor:";
    }

?>
</body>
</html>
