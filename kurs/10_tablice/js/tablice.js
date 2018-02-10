var tablica = []; //pusta tablica
var kolory = ['zielony','czerwony','niebieski'];//tablica z 3 elementami
var cyfry1 = [1,2,3,4,5,6];
var a = 'Janusz';
var b = 'Agata';
var c = 'Jonasz';
var tab = [a, b, c, 'tekst'];
var tab1 = [a, 'tekst', 1, 'a', 10];

//#######################################

var owoce= ['pomelo','kiwi','jabłko','arbuz'];
console.log(owoce); //wyświetla tablice
//document.write(owoce);//pomelo, kiwi, jablko
var dlugosc = owoce.length;
console.log(dlugosc);

//wyświetlenie elementów tablicy ########################

var pilkarze = ['carlos','lewandowski','messi','dudek', 'zidane'];
console.log(pilkarze[2]);//messi, pierwszy element tablicy
console.log(pilkarze[0]);//carlos
//console.log(pilkarze[pilkarze.length]); //undefined
//console.log(pilkarze[pilkarze.length - 1]); //zidane
//for (var i=0; i<pilkarze.length; i++){
//    document.write(pilkarze[i] + ' ');
//}

//for (var i = 0; i < pilkarze.length; i++){
//    document.write('piłkarz' + '' + (i + 1) + '- ' + pilkarze[i] + '<br>');
//}
    document.write("<li id='pierwszy'> pierwszy pilkarz w tablicy: " + pilkarze [0] + '</li><br>');
    document.write("<li id='ostatni'>ostatni pilkarz w tablicy: " + pilkarze[pilkarze.length -1] + '</li><br>');

//##################### dodawanie elementów

var tabCyfry = [1, 2, 3, 4];
tabCyfry.push(5);
console.log(tabCyfry);

//################ odejmowanie elementów

tabCyfry.pop();  // domyslnie usuwa jedną pozycje - 5
console.log(tabCyfry);
tabCyfry.pop();  // usuniecie 4
console.log(tabCyfry);

//############# sortowanie - sortuje za pomocą tabeli askii czyli wartościach liter

var imiona = ['Janusz', 'Agata', 'Zenon', 'Ula', 'Andrzej'];
console.log(imiona);
var sortImiona = imiona.sort();
console.log(sortImiona);
var reverseImiona = sortImiona.reverse(); //odwrotna kolejnosc
console.log(reverseImiona);
reverseImiona.push('Marta'); //dodanie do tablicy na koncu imiona
console.log(reverseImiona);
//dodanie do tablicy na poczatku
reverseImiona.unshift('Monika');
console.log(reverseImiona);
//######### sprawdzenie czy element istnieje w tablicy
console.log(reverseImiona.indexOf('Monika'));//0
console.log(reverseImiona.indexOf('Marta'));//6
console.log(reverseImiona.indexOf('XYZ'));//-1

var liczba = [2, 10, 1000, 23, 9];
console.log(liczba);
//#######################sortowanie liczb
var sortLiczby = liczba.sort();
console.log(sortLiczby); // 2,23, 10, 1000,9

var prawidloweSortLiczby = liczba.sort(function(a,b){
    return a - b; //odejmuje liczby obok siebie i zwraca wartosc i sortuje
});
console.log(prawidloweSortLiczby);

//####################tablice wielowymiarowe

var dane = [];
dane[0] = ['Jan', 'Nowak', 'Poznań'];
dane[1] = ['Anna', 'Nowak', 'Gniezno', 'Polska'];
dane[2] = ['Paweł', 'Kowal', 'Poznań'];

console.log(dane[1][2]); //Gniezno
//pierwszy for wiersze drugi wartosci
//for (var i=0; i<=dane.length; i++){
//
//    for (var j=0; j<dane[i].length; j++){
//    document.write(dane[i][j])
//    };
//    document.write("<br>");
//};

console.clear();

var elKolor = document.getElementById('kolor');
elKolor.focus();
var elPrzycisk = document.getElementById('przycisk');
var elWyswietl = document.getElementById('wyswietl');
var elWynik = document.getElementById('wynik');
var tabKolory = []; //tablica
//var z = ''; zmienna globalna - duplikowala wartosci

function dodajKolor() {
    if(elKolor.value.length != 0){
    tabKolory.push(elKolor.value);
    console.log(tabKolory);
    elKolor.value = '';
    elKolor.focus();
//    wynik.innerHTML = tabKolory;
    }
}
function wyswietlKolory() {
    var z = ''; // zmienna lokalna
    for (var i=0; i<tabKolory.length; i++){
       z+="<li>" + tabKolory[i] + "</li>";
    }
    elWynik.innerHTML = z;
}
elPrzycisk.addEventListener('click',dodajKolor);
elWyswietl.addEventListener('click',wyswietlKolory);

//#####################

var elImie = document.getElementById('imie');
elImie.focus();
var elNazwisko = document.getElementById('nazwisko');
var elMiasto = document.getElementById('miasto');
var elDodajU = document.getElementById('dodajU');
var elWyswietlU = document.getElementById('wyswietlU');
var elDivU = document.getElementById('divU');
var elPrzyciskWybor = document.getElementById('przyciskWybor');
var elDivWybor = document.getElementById('divWybor');
var daneU = [];

function dodajUzytkownika() {
    daneU[daneU.length] = [elImie.value, elNazwisko.value, elMiasto.value];
    console.log(daneU);
    console.log(daneU.length);
    elImie.value='';
    elNazwisko.value='';
    elMiasto.value='';

}
function wyswietlUzytkownika() {
    var nazwisko = '';
    for(var i=0; i < daneU.length; i++){
        nazwisko += daneU [i][1] + '<br>';

    }
     elDivU.innerHTML = nazwisko;
}


function wyswietlUzytkownika1() {
    var nazwisko = '';
    for(var i=0; i < daneU.length; i++){
       nazwisko += daneU [i][1] + '<input type="radio" name="wybor" value="'+ i + '">' + '<br>';
    }
        elDivU.innerHTML = '<form name="form1">' + nazwisko + '</form>';
        //elDivU.innerHTML = nazwisko;
}

function wyborU(){
    var id, komunikat;
    id = form1.elements['wybor'].value;
    //console.log(id);
    komunikat = 'Imię:' + daneU[id][0] + '<br>';
    komunikat += 'Nazwisko:' + daneU[id][1] + '<br>';
    komunikat += 'Miasto:' + daneU[id][2] + '<br>';
    divWybor.innerHTML = komunikat;
}

elDodajU.addEventListener('click',dodajUzytkownika);
elWyswietlU.addEventListener('click',wyswietlUzytkownika1);
elPrzyciskWybor.addEventListener('click',wyborU);





