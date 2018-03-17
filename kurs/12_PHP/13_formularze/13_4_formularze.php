<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pole i obwód</title>
</head>
<body>

<!--
   zad.1
   uzytkownik podaje z klawiatury dwie długości do wyboru w polu radio ma: pole, obwód, domyślnie zaznaczone ma  być "pole"zabezpiecz formularz przed wysłanie pustych pól wynik ma być wyswietlony pod formularzem rozwiazanie ma być w osobnym pliku

   -->
    <form method="post" action="./13_4_formularze.php">
        <input type="number" name="x">x<br>
        <input type="number" name="y">y<br>
        <input type="radio" name="wybor" value="p" checked>Pole
        <input type="radio" name="wybor" value="o">Obwód<br>
        <input type="submit" name="przycisk" value="Oblicz">
    </form>
     <?php
    if (!empty($_POST['x']) && !empty($_POST['y']) && isset($_POST['przycisk'])){
        $x = $_POST['x'];
        $y = $_POST['y'];
        if($x > 0 && $y > 0){
            if($_POST['wybor'] =='p'){
                echo"Pole wynosi: ".$x * $y."cm<sup>2</sup>";
                }else{
                $wynik =2*$x +2*$y;
                echo"Obwód wynosi: ".$wynik."cm";
            }
        }
    }

    ?>
</body>
</html>
