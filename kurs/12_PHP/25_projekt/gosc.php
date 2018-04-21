<?php
session_start();
    if($_SESSION['uprawnienia'] == 'gosc'){
        echo "ok";
    }else{
        header('location: index.php');
    }


?>
