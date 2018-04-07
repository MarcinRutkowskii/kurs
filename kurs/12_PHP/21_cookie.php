<?php
$dni = 30;

if(!isset($_COOKIE['licznik'])){
    $licznik = 1;
}else{
    $licznik =intval($_COOKIE['licznik']);
    $licznik++;
}

setcookie('licznik',"$licznik", time()+60*60*24*$dni);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
    <form action="./22_cookie.php">
        <input type="submit" name="dodaj" value="+">
        <input type="submit" name="usun" value="usun ciasteczko">
    </form>
   <?php

        if(isset($_GET['usun'])){
            setcookie('licznik', false);
            header('location: ./22_cookie.php');

        }
        if(licznik == 1){
            echo "Liczba odwiedzin w ciągu ostatnich $dni dni: <span style=\"color:red\"> $licznik </span> raz";
        }else{
            echo "Liczba odwiedzin w ciągu ostatnich $dni dni: <span style=\"color:red\"> $licznik </span> razy";
        }


?>

</body>
</html>
