<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel logowania</title>
</head>
<body>
    <h2>Logowanie do systemu</h2>
    <?php

        if (isset($_SESSION['blad'])){
            echo $_SESSION['blad'];
        }
        if (isset($_SESSION['zalogowany'])){
            header('Location: ./zalogowany.php');

        }


    ?>
    <form method="post" action="./sprawdz.php">
        <input type="text" name="login" placeholder="login"><br><br>
        <input type="password" name="haslo" placeholder="haslo"><br><br>
        <input type="submit" name="przycisk" value="Zaloguj">
    </form>
</body>
</html>
