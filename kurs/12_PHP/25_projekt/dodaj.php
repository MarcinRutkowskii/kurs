<?php
session_start();
if($_SESSION['uprawnienia'] == 'admin'){
if(isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['mail']) && !empty($_POST['imie']) && !empty($_POST['nazwisko'])){

    include_once('./polaczenie.php');
    $login = $polaczenie->real_escape_string(htmlentities($_POST['login']));
    $mail = $polaczenie->real_escape_string(htmlentities($_POST['mail']));
    $imie = $polaczenie->real_escape_string(htmlentities($_POST['imie']));
    $nazwisko = $polaczenie->real_escape_string(htmlentities($_POST['nazwisko']));
    $uprawnienie = $_POST['uprawnienie'];
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
    // testy echo $login, $mail, $imie, $nazwisko,$uprawnienie,$haslo;

    $sql = "insert into administracja values (NULL, '$uprawnienie', '$login', '$mail', '$imie', '$nazwisko', '$haslo', 'aktywny' )";

    if(!$polaczenie->connect_error){
        if($rezultat  = $polaczenie->query($sql)){
            $_SESSION['blad'] = "<b>Dodano prawidłowo użytkownika: $login</b>";
            header('location: admin.php');
        }else{
            $_SESSION['blad'] = '<b>Błędne zapytanie do bazy</b>';
            header('location: admin.php');

        }
    $polaczenie->close();

    }else{
        $_SESSION['blad'] = 'Błędne połączenie z bazą danych, nie dodano użytkownika';
        header('location: ./admin.php');
    }


}else{
    header('location: admin.php');
}
}else{
    header('location: index.php');
}

?>
