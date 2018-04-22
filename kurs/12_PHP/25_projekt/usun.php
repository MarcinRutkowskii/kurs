<?php
    session_start();
    if(isset($_SESSION['zalogowany']) && $_SESSION['uprawnienia'] == 'admin'){
        //echo 'ok';
        $usun = $_GET['usun'];
        include_once('polaczenie.php');
        if(!$polaczenie->connect_error){
            $sql = "DELETE FROM `administracja` WHERE `administracja`.`idAdministracja` = '$usun'";
            if($rezultat = $polaczenie->query($sql)){
            $_SESSION['blad'] = 'Prawidłowo usunięto użytkownika';
            header('location: admin.php');
            }
        }else{
            $_SESSION['blad'] = 'Błędne połączenie z bazą, nie usunięto użytkownika';
            header('location: admin.php');
        }
    }else{
        header('location: index.php');
    }

?>
