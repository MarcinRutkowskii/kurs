<?php
    $x = 2;
    if($x == 1){
        echo 'jeden';
    }else if($x == 2){
        echo 'dwa';
    }else if($x == 3){
        echo 'trzy';
    }else{
        echo 'inna liczba';
    }
    echo'<br><br>';
//SWITCH

switch($x){
    case 1:
        echo 'jeden';
        break;
    case 2:
        echo 'dwa';
        break;
    case 3:
        echo 'trzy';
        break;
    default:
        echo 'Inna liczba';
}
echo '<br><br>';

$tekst = 'Janusz';
switch($tekst){
    case 'Anna':
        echo 'Witaj Anna';
        break;
    case 'Janusz':
        echo 'Witaj Janusz';
        break;
    default:
        echo 'Witaj inny uzytkowniku';

}

?>
