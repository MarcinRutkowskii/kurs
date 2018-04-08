<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <h3>Formularz logowania</h3>
   <?php
        session_start();
        $_SESSION['zalogowany'] = 0;
        $_SESSION['blad'] = false;
        if(isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
            if($polaczenie = mysqli_connect('localhost','root','','teb')){
                $login = $_POST['login'];
                $login = htmlentities($login);
                $login = htmlspecialchars($login, ENT_QUOTES);
                $haslo = $_POST['haslo'];


                mysqli_set_charset($polaczenie,"utf8");

                $zapytanie = "SELECT `imie`,`nazwisko`,`miasto` FROM `uzytkownicy` WHERE login = '$login' AND haslo = '$haslo'";
                if($rezultat = mysqli_query($polaczenie,$zapytanie)){
                    $wiersz = mysqli_fetch_assoc($rezultat);
                    if($ile = mysqli_num_rows($rezultat)){
                    echo "<h3>Twoje dane: </h3>";
                    $wyswietl = "Imię: $wiersz[imie]<br>";
                    $wyswietl .= "Nazwisko: $wiersz[nazwisko]<br>";
                    $wyswietl .= "Miasto: $wiersz[miasto]<br>";
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
//#################### przykład działania zabezpieczeń przed wstrzykiwaniem kodu HTML
    $a = '<b>test<br></b>';
    echo "$a<br>";
    $a = htmlentities($a); //<b>test</b>
    $b = htmlspecialchars("<a href='test'>Test</a><br>",ENT_QUOTES); //<b>test</b>
    echo "$b";
?>

<form method="post">
<input type="text" name="login" placeholder="login"><br><br>
<input type="password" name="haslo" placeholder="hasło"><br><br>
<input type="password" name="haslo1" placeholder="potwierdz haslo"><br><br>
<input type="text" name="imie" placeholder="imie"><br><br>
<input type="text" name="nazwisko" placeholder="nazwisko"><br><br>
<input type="text" name="miasto" placeholder="miasto"><br><br>
<input type="submit" name="przycisk" value="dodaj">
</form>
<!-- zad dom
utworzyć bazę z samochodami, o nazwie komis, utwórz tabelę o nazwie auta i klienci, stwórz relację jeden do n (do wielu), na stronie użytkownik wybiera w formularzu model i markę auta, wyswietl wszystkie dane o aucie na stronie , do wyboru użytkownik będzie miał markę i możliwość wyświetlenia właścicieli auta(petla while) po stronie klienic ma byc klucz obcy, porobic zabezpieczneia, na stronie można się zalogować tylko użytkownikom zalogowanym wyświetlą się wszystkie dane klientów
-->
</body>
</html>
