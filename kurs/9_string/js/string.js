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

var duza = text.toUpperCase;
