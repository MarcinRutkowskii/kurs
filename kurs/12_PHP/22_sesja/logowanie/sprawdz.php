<?php
    session_start();
    if (isset ($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
            $login = htmlentities($_POST['login']);
            $haslo = htmlentities($_POST['haslo']);
//            echo "$login $haslo";
        if ($login == 'jan' && $haslo =='tajne'){
            $_SESSION['zalogowany'] = $login;
            $_SESSION['login'] = true;
            unset($SESSION['blad']);
            header('Location: ./zalogowany.php');
        }else{
            $_SESSION['blad'] = '<h3>Błędne dane logowania<h3>';
            header('Location: ./index.php');
        }
    }else{
        $_SESSION['blad'] = '<h3>Uzupełnij wszystkie dane logowania<h3>';
        header('Location: ./index.php');
    }

    //echo "$login $haslo";
//hmtlentities zabezpiecza przed wstrzykiwaniem kodu html do danych np <b>jan bez tego by pogrubilo tekst w loginie

?>
