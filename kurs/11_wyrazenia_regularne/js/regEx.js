//true or false prawda czy falsz - sprawdzany kod ASCII, regexy
var tekst = '64-100';
var regula = /szkola/;
regula = /SZKOLA/;
regula = /SzKoLa/i; // jak sie dodaje "i" to nie zwraca uwagi na wielkosc liter
regula = /^szkola/i; //^ oznacza ze sprawdzamy od poczatku stringa
regula = /szkola$/i; //$ oznacza sprawdzanie na koncu
regula = /^Janusz/i; // sprawdza czy caly ciag ktory jest od poczatku do konca taki sam

regula = /[a]/; //sprawdza czy w tekscie jest ta litera(regula)
regula = /[A]/i; // "i" keys insensitive match- niewrazliwosc, na wielkosc liter
regula = /[a-z]/; // bez polskich znakow diakrytycznych - tablica ascii
regula = /[A-Z]/;
regula = /[A-z]/;// uwaga na inne znaki np .[] \ ^ _ '
regula = /[a-z] | [A-Z]/; // to jest lepszy sposob
regula = /[ąężźśćńół] | [a-z]/; // | lub
regula = /^[ąężźśćńół] | [A-Z]/;//sprawdza kazdy znak od poczatku t ablicy ascii
regula = /^[ąężźśćńół]/;
regula = /[a-z]\s/; // \s szuka spacji, tabulacja lub znak nowego wiersza
regula = /[a-z]\S/; // \S znak nie będący spacją, tabulacją lub znakiem nowego wiersza
//email
regula = /[a-z]+@/; // + oznacza jeden lub wiecej znakow
regula = /^mąk[a]?@/; //? oznacza ze moze byc znak np[a] ale nie musi
regula = /^mąk[znak]?@/; // moze byc jeden z tych znakow moze byc ale nie cały
regula = /[a]{1}/; // {1} musi byc przynajmniej raz jeden znak
regula = /[a]{2}/; // {2} musi byc przynajmniej raz jeden znak
regula = /[a]{2-4}/; //{2-4} musi byc przynajmniej od 2 do 4 znakow
regula = /[a]{2,}/; //{2,} musi byc 2 lub wiecej znakow
regula = /^[a]{2,}$/; //{2,} musi byc 2 lub wiecej znakow od poczatku do konca
regula = /\//; // musi byc slash /
regula = /\s/; // musi byc spacja
regula = /\S/; // nie może byc spacji
regula = /./; // musi być jeden znak
regula = /../; // musza byc dwa znaki itd
regula = /\./; // musi byc kropka, \oznacza ze musi byc jakis znak specjalny
regula = /\.[a-z]{2}$/;// zadanie, musi byc .pl itp

// \w znak będący literą,cyfrą,znakiem podkreślenia _
// \W znak niebędący literą,cyfrą,znakiem podkreślenia _

regula = /\w/; // np kropka nie nalezy do tego zbioru
regula = /\W/; //jezeli chcemy zeby uzytkownik dodal np znak specjalny do hasla
regula = /\W|[_]/; //bez znakow specjalnych ale z podkresleniem

// \d znak będący cyfrą
// \D znak niebędący cyfrą

regula = /\d/;
regula = /\D/;

//grupa

regula = /(test)/;
regula = /(test){2}/; //tekst musi byc w grupie czyli obok siebie, sposob na walidacje stringów
regula = /^\d{2}-\d{3}$/; //zadanie, metoda na kod pocztowy
//kod pocztowy = /^[0-9]{2}-[0-9]{3}$/; druga metoda
var sprawdz = regula.test(tekst);
console.log(sprawdz);

var muzyka = "plik@mp3 arkusz.csv szkola.mp3 tekst.mp3";
//var mp3 = /\w+\.mp3/;
var mp3 = /\w+\.mp3/g;
sprawdz = mp3.test(muzyka);
var sprawdz1;
sprawdz1 = muzyka.match(mp3); //wybiera z calego ciagu wartosci .mp3
console.log(sprawdz);
console.log(sprawdz1);
var iloscUtworow = sprawdz1.length;
console.log('ilosc utworow: ' + iloscUtworow);

    document.write('<ol>');
for (var i=0; i<iloscUtworow; i++){
    document.write('<li>'+ sprawdz1[i] + '</li>');
}
