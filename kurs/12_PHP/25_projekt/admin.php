<?php
session_start();
    if($_SESSION['uprawnienia'] == 'admin'){
        include_once('polaczenie.php');
        if(!$polaczenie->connect_error){
            $sql = "SELECT * FROM `administracja`";
            if($rezultat = $polaczenie->query($sql)){
             echo <<<TABELA
            <table>
                <tr>
                    <th>Id</th>
                    <th>UprawnienieId</th>
                    <th>Login</th>
                    <th>Mail</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Hasło</th>
                    <th>Aktywny</th>
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
               </tr>
WIERSZ;
            }
            }else{
                echo 'Bledne zapytanie do bazy danych';
            }
        }else{

        }
    }else{
        header('location: index.php');
    }



?>
