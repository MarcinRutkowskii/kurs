<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zmienne superglobalne</title>
</head>
<body>
   <?php

########################### zmienne superglobalne ###############################################

        echo $_SERVER['SERVER_PORT']."<br>";//80
        echo $_SERVER['SCRIPT_NAME']."<br>";//sciezka folderu
        echo $_SERVER['SERVER_PROTOCOL']."<br>";//protokol serwera
        echo $_SERVER['DOCUMENT_ROOT']."<br>";//sciezka do htdocs

        $plik = $_SERVER['DOCUMENT_ROOT'];
        $plik .= $_SERVER['SCRIPT_NAME'];
        echo $plik."<br>";

################################# stałe predefiniowane ###########################################

        echo PHP_VERSION."<br>"; //7.2.3
        $ver = PHP_VERSION;

        if ($ver >= 7.2){
            echo "Nowa wersja PHP";

        }else{
            echo"stara wersja PHP";
        }

        echo "<br>";

        echo PHP_OS."<br>";
        echo __LINE__."<br>"; //linia kodu
        echo __FILE__."<br>"; // lokalizacja pliku
        echo __DIR__."<br>";

    ?>
</body>
</html>
