var text = 'Kurs programowania - JS i PHP';
console.log(text);
console.log(text.length); //29

var pierwszyZnak = text.charAt(0);
console.log(pierwszyZnak);  //K

var ostatniZnak= text.charAt(text.length - 1);
console.log(ostatniZnak);   //P

var kod = text.charCodeAt(0);
console.log(kod);   //75

//############ zamiana na duże litery ###############

var duza  = text.toUpperCase();
console.log(duza);

//############ zamiana na małe litery ###############

var mala = text.toLowerCase();
console.log(mala);

//zad.1 zamień imię wprowadzone w formularzu na:
//pierwsza litera duża
//pozostałe litery małe

var elImie = document.getElementById('imie');
var elNazwisko = document.getElementById('nazwisko');
var elPrzycisk = document.getElementById('przycisk');
var elKomunikat = document.getElementById('komunikat');
var elKomunikat1 = document.getElementById('komunikat1');
var elSuwak = document.getElementById('suwak');
var elPrzycisk1 = document.getElementById('przycisk1');
var elKomunikat2 = document.getElementById('komunikat2');
var elPozycja = document.getElementById('pozycja');
var elKolor = document.getElementById('kolor');

var imie, nazwisko, minimum;
var poprawneImie;
var poprawneNazwisko;
var dlugoscNazwiska, pozycja, kolor;


function zamienImie(){
    imie = elImie.value;
    nazwisko = elNazwisko.value;
    poprawneImie = imie.charAt(0).toUpperCase() + imie.slice(1).toLowerCase();
    poprawneNazwisko = nazwisko.charAt(0).toUpperCase() + nazwisko.slice(1).toLowerCase();
    elKomunikat.innerHTML = "Twoje imię: " + poprawneImie;
    elKomunikat1.innerHTML = "Twoje nazwisko: " + poprawneNazwisko;
    elKomunikat.style.color = "aqua";
    elKomunikat1.style.color = "brown";
}

function wycinanie(){
    minimum = elSuwak.value;
    minimum = minimum;
    console.log(minimum);
    nazwisko = elNazwisko.value;
    nazwisko = nazwisko.substr(minimum,nazwisko.length);
    elKomunikat2.innerHTML = nazwisko;
}

function pozycja(){
    pozycja = elSuwak.value;
    elPozycja.innerHTML= "Pozycja suwaka: " + pozycja;
    dlugoscNazwiska = elNazwisko.value.length;
    elSuwak.max = dlugoscNazwiska;
    nazwisko = elNazwisko.value;
    nazwisko = nazwisko.slice(pozycja - 1);
    if(pozycja == 0){
        elKomunikat2.innerHTML = "";
    }else{
        elKomunikat2.innerHTML = nazwisko;
    }
}

function blokuj(){
    if (elNazwisko.value.length == 0){
        elSuwak.disabled = true;
        elSuwak.max = elNazwisko.value.length;
        elKomunikat2.innerHTML = elNazwisko.value;
    }
    else{
        elSuwak.disabled = false;
        elSuwak.max = elNazwisko.value.length;
        elKomunikat2.innerHTML = elNazwisko.value;
    }
}

function zmienKolor(){
    kolor = elKolor.value;
    //console.log(kolor)
    elKomunikat2.style.color = kolor;


}

elSuwak.disabled = true;
elSuwak.value = "0";
elPozycja.innerHTML     = "Pozycja suwaka: " + elSuwak.value;

elSuwak.addEventListener('change',pozycja);
elPrzycisk.addEventListener('click',zamienImie);
elPrzycisk1.addEventListener('click',wycinanie);
elNazwisko.addEventListener('keyup',blokuj);
elKolor.addEventListener('change',zmienKolor);

//###################  substr  ###########################


var zdanie = "Programowanie jest super";
var wycinanie = zdanie.substr(1,2);
console.log(wycinanie); //ro
var wycinanie1 = zdanie.substr(5,zdanie.length - 1);
console.log(wycinanie1); //amowanie jest super
