<?php
    session_start();
    unset($_SESSION['imie']); //unset usuwwa tylko jedna zmienna sesyjna
    $_SESSION['nazwisko'] = 'Kowal';
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sesja 1_2</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na ostatniej stronie!<br>
    Identyfiaktorem sesji: <?php echo session_id();?><br>
    <a href="sesja1.php">Początkowa strona</a>
</body>
</html>
