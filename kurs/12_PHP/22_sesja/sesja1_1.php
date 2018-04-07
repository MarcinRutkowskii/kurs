<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sesja 1_1</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na drugiej stronie!<br>
    Identyfiaktorem sesji: <?php echo session_id();?><br>
    <a href="sesja1_2.php">Ostatnia strona</a>
</body>
</html>
