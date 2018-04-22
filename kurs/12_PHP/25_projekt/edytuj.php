<?php
session_start();
if($_SESSION['uprawnienia'] == 'admin'){
if(isset($_POST['edytuj']) && !empty($_POST['login']) && !empty($_POST['mail']) && !empty($_POST['imie']) && !empty($_POST['nazwisko'])){

    include_once('./polaczenie.php');
    $id = $_POST['id'];
    $login = $polaczenie->real_escape_string(htmlentities($_POST['login']));
    $mail = $polaczenie->real_escape_string(htmlentities($_POST['mail']));
    $imie = $polaczenie->real_escape_string(htmlentities($_POST['imie']));
    $nazwisko = $polaczenie->real_escape_string(htmlentities($_POST['nazwisko']));
    $uprawnienie = $_POST['uprawnienie'];
    $aktywny = $_POST['aktywny'];
    $haslo = $login.'@2000';
    switch($uprawnienie){
        case 'Admin':
            $uprawnienie = 1;
            break;
        case 'Sekretariat':
            $uprawnienie = 2;
            break;
        case 'Uczeń':
            $uprawnienie = 3;
            break;
        case 'Gość':
            $uprawnienie = 4;
            break;
    }

    $sql = "UPDATE `administracja` SET `login` = '$login', `email` = '$mail', `imie` = '$imie', `nazwisko` = '$nazwisko', `uprawnienieId` = '$uprawnienie', `aktywny` = '$aktywny', `haslo` = '$haslo' WHERE `administracja`.`idAdministracja` = '$id'";
//        $sql = "UPDATE `administracja` SET  `login` = '$login' WHERE `administracja`.`idAdministracja` = '$id'";

    if(!$polaczenie->connect_error){
        if($rezultat  = $polaczenie->query($sql)){
            $_SESSION['blad'] = "<b>Zaaktualizowano prawidłowo użytkownika: $login</b>";
            header('location: admin.php');
        }else{
            $_SESSION['blad'] = '<b>Błędne zapytanie do bazy</b>';
            header('location: admin.php');

        }
        $polaczenie->close();
    }else{
        $_SESSION['blad'] = 'Błędne połączenie z bazą danych, nie zaaktualizowano użytkownika';
        header('location: ./admin.php');
    }


}else{
    header('location: admin.php');
}
}else{
    header('location: index.php');
}

?>
