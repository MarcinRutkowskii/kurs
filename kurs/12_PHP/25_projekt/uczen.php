<?php
session_start();
    if($_SESSION['uprawnienia'] == 'uczen'){
        echo "ok";
    }else{
        header('location: index.php');
    }


?>
