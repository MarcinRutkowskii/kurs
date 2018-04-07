<?php
    session_start();
    $_SESSION['imie'] = 'Filip';


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sesja1</title>
</head>
<body>
    <?php
        echo "Witamy $_SESSION[imie]";
        if(isset($_SESSION['nazwisko'])){
            echo " ".$_SESSION['nazwisko'];
        }
        echo " na stronie!<br>";
        echo "Identyfikator sesji: ".session_id()."<br>";


    ?>
    <a href="sesja1_1.php">Następna strona</a><br>
    <a href="sesja1.php?usunSesje=">Usuń sesję</a>
    <?php
        if(isset($_GET['usunSesje'])){
            session_destroy();
        }

    ?>
</body>
</html>
