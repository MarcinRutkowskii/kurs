<?php
session_start();
if(isset($_GET['wyloguj'])){
    unset($_SESSION['zalogowany']);
    session_destroy();
    header('Location: index.php');
}else{
    header('Location: index.php');
}
