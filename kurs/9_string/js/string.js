var text = 'Kurs programowania - JS i PHP';
console.log(text);
console.log(text.length);  //29, rowniez spacje sie wliczaja

var pierwszyZnak = text.charAt(0);
console.log(pierwszyZnak); //K

var ostatniZnak = text.charAt(text.length - 1);
console.log(ostatniZnak); //P

var kod = text.charCodeAt(0);
console.log(kod);  //75 tablica ASCII

//################## zamiana na duże litery #################

var duza = text.toUpperCase();
console.log(duza);

//################ zamiana na małe litery

var mala = text.toLowerCase();
console.log(mala);
//zamien imie wprowadzone w formularzu na:
//1 litera duza , pozostale litery male

var elImie = document.getElementById('imie');
var elPrzycisk = document.getElementById('przycisk');
var elKomunikat = document.getElementById('komunikat');
var elNazwisko = document.getElementById('nazwisko');
var imie;
var poprawneImie;
var nazwisko;
var poprawneNazwisko;

function zamienImie(){
    imie = elImie.value;
    poprawneImie = imie.charAt(0).toUpperCase() + imie.slice(1).toLowerCase();
    nazwisko = elNazwisko.value;
    poprawneNazwisko = nazwisko.charAt(0).toUpperCase() + nazwisko.slice(1).toLowerCase();
    elKomunikat.innerHTML = '<br>Twoje imie: ' + poprawneImie + '<br>Twoje nazwisko: ' + poprawneNazwisko;
    elKomunikat.style.color = 'red';

}
elPrzycisk.addEventListener('click', zamienImie);

function wycinanie(){
    minimum = elSuwak.value;
    minimum = minimum;
    console.log(minimum);
    nazwisko = elNazwisko.value;
    nazwisko = nazwisko.substr(minimum,nazwisko.length);
    elKomunikat2.innerHTML = nazwisko;
}

elPrzycisk.addEventListener('click',zamienImie);
elPrzycisk1.addEventListener('click',wycinanie);

//###################  substr  ###########################

var zdanie = "Programowanie jest super";
var wycinanie = zdanie.substr(1,2);
console.log(wycinanie); //ro
var wycinanie1 = zdanie.substr(5,zdanie.length - 1);
console.log(wycinanie1); //amowanie jest super
