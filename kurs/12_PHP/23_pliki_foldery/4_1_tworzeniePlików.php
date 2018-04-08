<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pliki i foldery - sortowanie</title>
</head>
<body>
  <p>Dodaj katalog</p>
   <form>
       <input type="text" name="katalog">
       <input type="submit" name="przyciskK" value="Dodaj katalog">


        <p>Dodaj plik</p>
        <input type="text" name="plik">
        <input type="submit" name="przyciskP" value="Dodaj plik">
       <b>Wybierz rozszerzenie pliku: </b>
        <input type="radio" name="typ" value=".txt" checked>.txt
        <input type="radio" name="typ" value=".doc">.doc
        <input type="radio" name="typ" value=".docx">.docx
        <input type="radio" name="typ" value=".pdf">.pdf
        <input type="radio" name="typ" value=".odt">.odt
        <input type="radio" name="typ" value=".xls">.xls
        <input type="radio" name="typ" value=".xlsx">.xlsx
        <br>
   </form>




   <hr>
    <?php
//name musi byc taki sam zeby nie zaznaczalo kazdego buttona
        $dir = "./test";
//*************************************usuwanie plików

    if (isset($_GET['usunP'])){
        $usunP = $_GET['usunP'];
        //echo $usunP;
        if(file_exists($dir."/".$usunP))
        unlink($dir."/".$usunP);
    }
//usuwanie katalogow
    if (isset($_GET['usunK'])){
        $usunK = $_GET['usunK'];
        //echo $usunK;
        if(file_exists($dir."/".$usunK))
        rmdir($dir."/".$usunK);
    }
//********************************************************Tworzenie katalogów
        if(isset($_GET['przyciskK']) && !empty($_GET['katalog'])){
            $katalog = $_GET['katalog'];
            //echo "$katalog";
            if (!file_exists($dir."/".$katalog)){
                mkdir($dir."/".$katalog);
            }else{
                echo "<h4>Katalog o nazwie: $katalog już istnieje<br>Podaj inną nazwę</h4>";
            }
        }
//******************************* Tworzenie plików

        if (isset($_GET['przyciskP']) && !empty($_GET['plik'])){
            $plik = $_GET['plik'];
            $typ = $_GET['typ'];
            if (!file_exists($dir."/".$plik.$typ)){
                $fd = fopen($dir."/".$plik.$typ, 'w');
                if (file_exists($dir."/".$plik.$typ)){
                    echo "<h4>dodano plik o nazwie $plik</h4>";
                }
                fclose($fd);
            }else{
                echo "<h4>Plik o nazwie: $plik istnieje<br>Podaj inną nazwę</h4>";
            }
        }
        if(!($folder = opendir($dir))){
            exit("Nie można otworzyć folderu");
        }else{
             $sortuj = 0;
             $pliki = array();
             $katalogi = array();
             $dane = scandir($dir, $sortuj);
                foreach ($dane as $wartosc){
                    if ($wartosc != '.' && $wartosc != '..')
                        if (is_file($dir."/".$wartosc)){
                            $pliki[] = $wartosc;
                        }else{
                            $katalogi[] = $wartosc;
                        }
                }
           closedir($folder);
             //echo $katalogi[0];
             if (isset($_GET['sortuj'])){
                 $sortuj = $_GET['sortuj'];
                 if ($sortuj == 0){
                     sort($pliki);
                     sort($katalogi);
                 }else{
                     rsort($pliki);
                     rsort($katalogi);
                 }
             }
//wyświetlanie plików
            echo "<h3>Pliki</h3>";
            echo "<ul>";
                foreach($pliki as $wartosc){
                    echo "<li>$wartosc <a href=\"4_tworzeniePlików.php?usunP=$wartosc\">Usuń</a></li>";
                }
                echo "</ul><hr>";
//wyświetlanie katalogów

                echo "<h3> Katalogi </h3>";
                echo "<ul>";
                    foreach ($katalogi as $wartosc){
                        echo "<li>$wartosc <a href=\"4_tworzeniePlików.php?usunK=$wartosc\">Usuń</a></li>";
                    }
                echo "</ul><hr>";
        }
     //sortuje wg tablicy ascii
    ?>
    <a href="4_1_tworzeniePlików.php?sortuj=0">Sortuj rosnąco</a>
    <a href="4_1_tworzeniePlików.php?sortuj=1">Sortuj malejąco</a>
</body>
</html>
