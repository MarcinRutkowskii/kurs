<?php
    //wszystkie uprawnienia do wszystkich baz danych
    $polaczenie = 'localhost';
    $user = 'root';
    $pass = '';
    $baza = 'szkola';
    @$polaczenie = new mysqli($polaczenie, $user, $pass, $baza);




?>
