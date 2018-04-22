<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel administracyjny</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/jQuery.js" ></script>

</head>
<body>
<?php
    if($_SESSION['uprawnienia'] == 'admin'){
        include_once('polaczenie1.php');
        if(!$polaczenie->connect_error){
            //dodawanie polskich znaków wazne
            $polaczenie->set_charset("utf8");
            $sql = "SELECT * FROM `administracja`";
            if($rezultat = $polaczenie->query($sql)){
             echo <<<TABELA
            <table id="tabela1">
                <tr>
                    <th>Id</th>
                    <th>UprawnienieId</th>
                    <th>Login</th>
                    <th>Mail</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Hasło</th>
                    <th>Aktywny</th>
                    <th>Usuń użytkownika</th>
                    <th>Edytuj użytkownika</th>
                </tr>
TABELA;

            while($wiersz = $rezultat->fetch_assoc()){
                echo <<<WIERSZ
               <tr>
                <td>$wiersz[idAdministracja]</td>
                <td>$wiersz[uprawnienieId]</td>
                <td>$wiersz[login]</td>
                <td>$wiersz[email]</td>
                <td>$wiersz[imie]</td>
                <td>$wiersz[nazwisko]</td>
                <td>$wiersz[haslo]</td>
                <td>$wiersz[aktywny]</td>
                <td><a href="usun.php?usun=$wiersz[idAdministracja]">Usuń<a></td>
                <td><a href="admin.php?edytuj=$wiersz[idAdministracja]">Edytuj<a></td>
               </tr>
WIERSZ;
            }
           // echo "</table>";

            }else{
                echo 'Bledne zapytanie do bazy danych';
            }

        }else{

        }
    }else{
        //$_SESSION['blad'] = 'Błędne polaczenie z bazą danych';
       // header('location: index.php');
    }
?>
<div>
    <?php
        echo $_SESSION['blad'];

    ?>
</div>
<fieldset id="dodaj">
    <legend><h3>Dodawanie użytkownika</h3></legend>
<form method="post" action="./dodaj.php">
<!--##############################################################################-->
<?php
$sql = "SELECT `uprawnienie` FROM `uprawnienie`";
echo "<select name=\"uprawnienie\">";
    $rezultat = $polaczenie->query($sql);

while($wiersz = $rezultat->fetch_assoc()){
    echo "<option$wiersz[uprawnienie]</option>";
}

echo "</select>";
?>
<!--##############################################################################-->
<!--    <select name="uprawnienie">
        <option>Gość</option>
        <option>Sekretariat</option>
        <option>Uczeń</option>
        <option>Admin</option>
    </select>-->
    <input type="text" name="login" placeholder="login"><br><br>
    <input type="mail" name="mail" placeholder="mail"><br><br>
    <input type="text" name="imie" placeholder="imie"><br><br>
    <input type="text" name="nazwisko" placeholder="nazwisko"><br><br>
<!--      <select name="aktywny">
        <option>aktywny</option>
        <option>nieaktywny</option>
        <option>usunięty</option>
        <option>zablokowany</option>
    </select><br><br>-->
<?php
$sql = "SELECT `stan` FROM `stan`";
echo "<select name=\"aktywny\">";
    $rezultat = $polaczenie->query($sql);

while($wiersz = $rezultat->fetch_assoc()){
    echo "<option$wiersz[stan]</option>";
}

echo "</select><br>";

?>
    <input type="submit" value="Dodaj użytkownika" name="przycisk">
</form><br><br>
<a href="wyloguj.php?"wyloguj=1>Wyloguj się</a><br>
</fieldset><br><hr><br>
<?php
    if(isset($_GET['edytuj'])){
        $id = $_GET['edytuj'];
        $sql = "select * from administracja where idAdministracja = '$id'";
        $rezultat = $polaczenie->query($sql);
        $wiersz = $rezultat->fetch_assoc();
        //echo $wiersz['login'];

echo "<table>";
/*    echo "<tr>";
        echo "<td><input type=\"text\" value=\">$wiersz[uprawnienieId]</input></td>";
    echo "</tr>";*/
echo "<h2> Edycja użytkownika </h2>";
echo <<< EDYCJA
        <form method="post" action="./edytuj.php">
        Identyfikator użytkownika $wiersz[idAdministracja], login: $wiersz[login]<br><br>
        <select name="uprawnienie">
        <option>Gość</option>
        <option>Sekretariat</option>
        <option>Uczeń</option>
        <option>Admin</option>
        </select><br><br>
        <input type="hidden" name="id" value="$wiersz[idAdministracja]">
        <input type="text" name="login" value="$wiersz[login]"><br><br>
        <input type="text" name="mail" value="$wiersz[email]"><br><br>
        <input type="text" name="imie" value="$wiersz[imie]"><br><br>
        <input type="text" name="nazwisko" value="$wiersz[nazwisko]"><br><br>
        <input type="password" name="haslo" value="$wiersz[haslo]"><br><br>
        <input type="text" value="$wiersz[stanId]"><br><br>
        <select name="aktywny">
        <option>aktywny</option>
        <option>nieaktywny</option>
        <option>usunięty</option>
        <option>zablokowany</option>
        </select><br><br>
        <input type="submit" name="edytuj" value="Zatwierdź edycję"></input>
        </form>

EDYCJA;
echo "</table>";
 }
$polaczenie->close();
?>
</body>
</html>
