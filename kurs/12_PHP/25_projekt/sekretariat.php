<?php
session_start();
    if($_SESSION['uprawnienia'] == 'sekretariat'){
        echo "ok";
    }else{
        header('location: index.php');
    }


?>
