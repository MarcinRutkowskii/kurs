<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Otwieranie plików</title>
</head>
<body>
    <?php
    $dir = "./test";
    $plik = "kurs.txt";
    if(isset($_GET['przycisk'])){
        $nowyTekst = $_GET['area'];
        //echo $nowyTekst;
        //if($fd = fopen($dir."/".$plik,'wb')){//nadpisuje
        if($fd = fopen($dir."/".$plik,'a')){ //dopisuje
            if(fwrite($fd, $nowyTekst) === false){
                echo "błąd zapisu";
            }else{
                echo "Plik zapisany poprawnie";
            }fclose($fd);
        }else{
            echo "Nie można otworzyć pliku o nazwie $plik";
        }
    }
//####################otwarcie i wyswietlenie pliku w polu area
    echo "<br>";
    if(!$fd = fopen($dir."/".$plik, 'r')){
        echo "nie można otowrzyć pliku";
    }else{
        $rozmiar = filesize($dir."/".$plik);
        //echo "Rozmiar pliku Bajty: $rozmiar";
        $tekst = fread($fd, $rozmiar);
        fclose($fd);

    }

//#############################

    echo "<br>Wolne miejsce na partycji: "; //bajty
    $wolneMiejsce = round(disk_free_space("/") / (1024 * 1024),2); //katalog głowny
    echo $wolneMiejsce."MB";
    echo "<br>Pojemność dysku: ";
    $dysk = round(disk_total_space("/") / (1024**3),2);//**3 do trzeciej potęgi
    echo "$dysk GiB <br>";
    ?>
   <form>
       <textarea name="area" cols="40" rows="15" ><?php
        echo $tekst;
       ?></textarea><br>

       <input type="submit" name="przycisk" value="zapisz">

   </form>


</body>
</html>
