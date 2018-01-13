var r = 5;
var pi = Math.PI; // Math - obiekt, . - operator elementu składowego, PI - właściwość
var poleKola = pi * r * r;
document.write(poleKola);

var x = prompt('Podaj wartość');
console.log(Math.sqrt(x)); // sqrt()  - metoda obiektu Math, x - argument

var a = 13.2;
var b = 28.5;
var c = 10;
var d = 1.123456789;
var e = 100.123456789;

var minimalna = Math.min(a, b, c);
console.log("Min: " + minimalna); // + konkatenacja

var maksymalna = Math.max(a, b, c);
console.log("Max: " + maksymalna);

var zaokraglenie = Math.round(b);
console.log(zaokraglenie); //29

//zaokraglenie do dwóch miejsc po przecinku
var d = d.toFixed(2); //1.12
console.log("Zmienna d: " + d);

//liczba całkowita cyfr przed i po przecinku
var e = e.toPrecision(4);
console.log("Zmienna e: " + e); //100.1

//abs, round, floor

var x = -56;
var y = -13.1;
var z = 14.9;

document.write('<br>ABS<br>');
document.write('<br>' + Math.abs(x) + '<br>'); //56
document.write('<br>' + Math.abs(y) + '<br>'); //13.1
document.write('<br>' + Math.abs(z) + '<br>'); //14.9

document.write('<br>ROUND<br>');
document.write('<br>' + Math.round(x) + '<br>'); //-56
document.write('<br>' + Math.round(y) + '<br>'); //-13
document.write('<br>' + Math.round(z) + '<br>'); //15

document.write('<br>FLOOR<br>');
document.write('<br>' + Math.floor(x) + '<br>'); //-56
document.write('<br>' + Math.floor(y) + '<br>'); //-14
document.write('<br>' + Math.floor(z) + '<br>'); //14

//combo
document.write('<br>' + Math.abs(Math.round(x)) + '<br>'); //56

//potęgowanie
var p = Math.pow(2,10);
console.log(p);

//losowanie
//Math.random()

//losuj z przedziału <0;10>
var losuj = Math.floor(Math.random() * 11);
console.log(losuj);

//losuj z przedziału <10;100>
var losuj1 = Math.floor(Math.random() * 91 + 10);
console.log(losuj1);

//zad.dom.
//wylosuj liczby z przedziału <15;25>

//##################################################################

var elPi = document.getElementById('pi');
var elNic = document.getElementById('nic');
var elPrzycisk = document.getElementById('przycisk');
var elWynik = document.getElementById('wynik');

elPrzycisk.onclick = function() {
	if(elPi.checked){
		elWynik.innerHTML = Math.PI;
	}else if(elNic.checked){
		elWynik.innerHTML = "Wybrałeś Nic";
	}else{
		elWynik.innerHTML = "Wybierz jedno pole radio!";
	}
}
