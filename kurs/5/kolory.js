var elPrzycisk = document.getElementById('przycisk');
var elCzerwony = document.getElementById('czerwony');
var elZielony = document.getElementById('zielony');
var elOrange = document.getElementById('orange');
var elInny = document.getElementById('inny');
var elWynik = document.getElementById('wynik');

elPrzycisk.onclick = function(){
    //alert('test'); tak sprawdzamy
    if (elCzerwony.checked){ //sprawdzamy czy element byl sprawdzony
        elWynik.innerHTML = 'Twój ulubiony kolor: czerwony'; //skoro nie jest funkcja to musi byc bez nawiasu
    }else if (elZielony.checked){
        elWynik.innerHTML = 'Twój ulubiony kolor: zielony';
    }else if (elOrange.checked){
        elWynik.innerHTML = 'Twój ulubiony kolor: orange';
    }else{
        elWynik.innerHTML = 'Twój ulubiony kolor: inny';
    }
}
