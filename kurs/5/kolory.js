var elPrzycisk = document.getElementById('przycisk');
var elCzerwony = document.getElementById('czerwony');
var elZielony = document.getElementById('zielony');
var elOrange = document.getElementById('orange');
var elInny = document.getElementById('inny');
var elWynik = document.getElementById('wynik');
var elWybierzKolor = document.getElementById('wybierzKolor');
var innyKolor
elWybierzKolor.style.visibility = 'hidden';


elPrzycisk.onclick = function(){
    //alert('test'); tak sprawdzamy
    if (elCzerwony.checked){ //sprawdzamy czy element byl sprawdzony
        elWynik.innerHTML = 'Twój ulubiony kolor: czerwony'; //skoro nie jest funkcja to musi byc bez nawiasu
    }else if (elZielony.checked){
        elWynik.innerHTML = 'Twój ulubiony kolor: zielony';
    }else if (elOrange.checked){
        elWynik.innerHTML = 'Twój ulubiony kolor: orange';
    }else{
        //console.log(elWybierzKolor.value);
        innyKolor = elWybierzKolor.value;
        elWynik.innerHTML = 'Twój ulubiony kolor: ' + innyKolor;

    }
}
elInny.onclick = function(){
    elWybierzKolor.style.visibility = 'visible';
    elWynik.innerHTML = 'Wybierz kolor';

}
