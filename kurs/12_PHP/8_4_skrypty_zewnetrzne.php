<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Skrypty zewnetrzne</title>
</head>
<body>
   <?php
    include_once('8_2_skrypty_zewnetrzne.php'); // once drugi raz nie podłączy tego samego pliku
    include_once('8_2_skrypty_zewnetrzne.php');
    include_once('8_2_skrypty_zewnetrzne.php');
    echo '<br>';
    require_once('8_3_skrypty_zewnetrzne.php');
    require_once('8_3_skrypty_zewnetrzne.php');

    ?>
</body>
</html>
