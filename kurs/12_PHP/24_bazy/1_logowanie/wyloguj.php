<?php
    session_start();
    if(isset($_GET['wyloguj'])){
        $_SESSION['zalogowany'] = 0;
        session_destroy();
        header('Location: index.php');
    }
?>
