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
        elSuwak.value = elNazwisko.value.length;
        elKomunikat2.innerHTML = elNazwisko.value;
    }

}

elSuwak.disabled = true;
elSuwak.value = "0";
elPozycja.innerHTML     = "Pozycja suwaka: " + elSuwak.value;


elSuwak.addEventListener('change',pozycja);
elPrzycisk.addEventListener('click',zamienImie);
elPrzycisk1.addEventListener('click',wycinanie);
elNazwisko.addEventListener('keyup',blokuj);

//###################  substr  ###########################


var zdanie = "Programowanie jest super";
var wycinanie = zdanie.substr(1,2);
console.log(wycinanie); //ro
var wycinanie1 = zdanie.substr(5,zdanie.length - 1);
console.log(wycinanie1); //amowanie jest super
