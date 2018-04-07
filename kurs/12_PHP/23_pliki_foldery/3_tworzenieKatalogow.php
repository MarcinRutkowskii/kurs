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

   </form><hr>
    <?php

        $dir = "./test";

        if(isset($_GET['przyciskK']) && !empty($_GET['katalog'])){
            $katalog = $_GET['katalog'];
            //echo "$katalog";
            if (!file_exists($dir."/".$katalog)){
                mkdir($dir."/".$katalog);
            }else{
                echo "<h4>Katalog o nazwie: $katalog już istnieje<br>Podaj inną nazwę</h4>";
            }
        }

        if(!($folder = opendir($dir))){
            exit("Nie można otworzyć folderu");
        }else{
            $sortuj = 0;
            $pliki = array();
            $katalogi = array();
        }
            $dane = scandir($dir, $sortuj);
            echo "<ul>";
                foreach($dane as $wartosc){
                    if($wartosc != '.' && $wartosc != '..')
                         if(is_file($dir."/".$wartosc)){
                             $pliki[] = $wartosc;
                         }else{
                             $katalogi[] = $wartosc;
                         }
            }
            closedir($folder);
            //echo $pliki[0];
                if(isset($_GET['sortuj'])){
                $sortuj = $_GET['sortuj'];
                if ($sortuj == 0){
                    sort($pliki);
                    sort($katalogi);
                }else{
                    rsort($pliki);
                    rsort($katalogi);
                }
            echo "<p>Pliki</p>";
            echo "<ul>";
                foreach($pliki as $wartosc){
                    echo "<li>$wartosc</li>";
                }
                echo "</ul><hr>";

                echo "<h3> Katalogi </h3>";
                echo "<ul>";
                    foreach ($katalogi as $wartosc){
                        echo "<li>$wartosc</li>";
                    }
                echo "</ul><hr>";
        }
     //sortuje wg tablicy ascii
    ?>
    <a href="2_1sortowanie.php?sortuj=0">Sortuj rosnąco</a>
    <a href="2_1sortowanie.php?sortuj=1">Sortuj malejąco</a>
</body>
</html>
