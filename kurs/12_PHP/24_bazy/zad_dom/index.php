<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel logowania</title>
</head>
<body>
   <h3>Panel logowania</h3>
   <?php
    session_start();
    $_SESSION['zalogowany'] = 0;
    $_SESSION['blad'] = false;
    if (isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
        if($polaczenie = mysqli_connect('localhost','root','','komis2')){
            $login = $_POST['login'];
            $login = htmlentities($login);
            $login = htmlspecialchars($login, ENT_QUOTES);
            $haslo = $_POST['haslo'];

            mysqli_set_charset($polaczenie,"utf-8");

            $zapytanie = "SELECT `marka`,`model`,`rocznik` FROM `auta` WHERE `login` = '$login'";
            if($rezultat = mysqli_query($polaczenie,$zapytanie)){
                    $wiersz = mysqli_fetch_assoc($rezultat);
                    if($ile = mysqli_num_rows($rezultat)){
                    echo "<h3>Twoje auta: $wiersz[imie]</h3>";
                    $wyswietl = "Imię: $wiersz[login]<br>";
                    $wyswietl .= "Marka: $wiersz[marka] ";
                    $wyswietl .= "$wiersz[model]<br>";
                    echo $wyswietl;
                    $_SESSION['zalogowany'] = 1;
                    echo "<a href=\"wyloguj.php?wyloguj=\">Wyloguj się</a>";
                        }else{
                        $_SESSION['zalogowany'] = 0;
                        $_SESSION['blad'] = "Błędne dane logowania";
                        }
                }else{
                    echo "Błędne zapytanie";
                }
            }else{
                echo "Błędne połączenie z bazą";
            }
        }else{
            if(isset($_POST['przycisk'])){
            $_SESSION['blad'] = 'Wprowadź wszystkie dane logowania';
            }
        }
        if($_SESSION['blad']){
            echo $_SESSION['blad'];
        }
        if($_SESSION['zalogowany'] == 0){

        }




    ?>

<form method="post">
<input type="text" name="login" placeholder="login"><br><br>
<input type="password" name="haslo" placeholder="hasło"><br><br>
<input type="submit" name="przycisk" value="zaloguj">
</form>

</body>
</html>
