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
    <form method="post">
        <input type="number" name="x">x<br>
        <input type="number" name="y">y<br>
        <input type="radio" name="wybor" value="p" checked>Pole
        <input type="radio" name="wybor" value="o">Obwód<br>
        <input type="submit" name="przycisk" value="Oblicz">
    </form>
     <?php
        require('13_5_1_formularze_zadanie.php'); //uzyc na swojej stronie

    ?>
</body>
</html>
