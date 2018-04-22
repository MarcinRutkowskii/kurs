<?php
session_start();
    if($_SESSION['uprawnienia'] == 'gosc'){
        echo "ok";
    }else{
        header('location: index.php');
    }


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Gość</title>
</head>
<body>
    <a href="wyloguj.php?"wyloguj=1>Wyloguj się</a><br>
</body>
</html>
