<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pliki i foldery</title>
</head>
<body>
    <?php
    //opendir - otwarcie lokalizacji,
    //jak sie doda @ nie wyświetla errorów
    //readdir - czytanie lokalizcaji
        $dir = "./test";
        if (@!($fd = opendir($dir))){
            exit("Nie można otworzyć katalogu $dir");
        }else{
            echo "<ul>";
            while(($plik = readdir($fd)) !== false){
                echo "<li>$plik</li>";
            }
            echo "</ul>";
        }
    closedir($fd);//zamykamy połaczeenie z folderem WAZNE
    ?>
</body>
</html>
