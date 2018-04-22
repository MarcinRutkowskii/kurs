<?php

    $polaczenie = 'localhost';
    $user = 'Janusz';
    $pass = 'zaq1@WSX';
    $baza = 'szkola';
    @$polaczenie = new mysqli($polaczenie, $user, $pass, $baza);
   // nadawanie uprawnień GRANT SELECT (`login`, `haslo`) ON `szkola`.`administracja` TO 'janusz'@'%';


?>
