var elImie = document.getElementById('imie');
var elNazwisko = document.getElementById('nazwisko');
var elLogin = document.getElementById('login');
var elMail1 = document.getElementById('mail1');
var elMail2 = document.getElementById('mail2');
var elPass1 = document.getElementById('pass1');
var elPass2 = document.getElementById('pass2');
var elData = document.getElementById('data');
var elRegulamin = document.getElementById('regulamin');
var elPrzycisk = document.getElementById('przycisk');
var elPrzycisk2 = document.getElementById('przycisk2');
var elKomunikat = document.getElementById('komunikat');
var elKomunikat2 = document.getElementById('komunikat2');
var elProgress = document.getElementById('progress');
elKomunikat.style.color = 'red';

var regImie = /^[a-ząężćźńółś]{2,20}$/i;
var regNazwisko = /^[a-ząężćźńóąś]{2,20}(-[a-ząężćźńóąś]{2,20})?$/i;
var regLogin = /^[a-z0-9]{1}[\w\.\-]{1,25}[a-z0-9]{1}$/i;
var regMail = /^[a-z]{1}[\w|\.|\-]{0,30}@(\w{1,20}\.){1,3}[a-z]{1,3}$/i;
var regPass = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W\_]).{8,35})$/;
var regPassSrednie1 = /^((?=.*\d)(?=.*[a-z]).{4,})$/;
//var regPassSlabe1 = /^\d{4,}$/;
//var regPassSlabe2 = /^[a-z]{4,}$/;
//var regPassSlabe3 = /^[A-Z]{4,}$/;
var regPassSlabe4 = /^([A-Z]|[a-z]|[0-9]){4,}$/;

/*elImie.onblur = function() {
    if(elImie.value.length >= 2){
        elKomunikat.innerHTML = '';
    }else{
        elKomunikat.innerHTML = 'Błędne dane';
    }
}

elNazwisko.onblur = function() {
    if(elNazwisko.value.length >= 2){
        elKomunikat.innerHTML = '';
    }else{
        elKomunikat.innerHTML = 'Błędne dane';
    }
} */

function sprawdzImie(){
   let imie = elImie.value;
   let sprawdz = regImie.test(imie);
   if(sprawdz){
        elKomunikat.innerHTML = '';
    }else{
        elKomunikat.innerHTML = 'Błędne imię';
        elImie.focus();
    }
}

function sprawdzNazwisko(){
   let nazwisko = elNazwisko.value;
   let sprawdz = regNazwisko.test(nazwisko);
   if(sprawdz){
        elKomunikat.innerHTML = '';
    }else{
        elKomunikat.innerHTML = 'Błędne nazwisko';
        elNazwisko.focus();
    }
}

function sprawdzLogin(){
   let login = elLogin.value;
   let sprawdz = regLogin.test(login);
   if(sprawdz){
        elKomunikat.innerHTML = '';
    }else{
        elKomunikat.innerHTML = 'Błędny login';
        elLogin.focus();
    }
}

function sprawdzMail(){
    let mail = elMail1.value;
    let sprawdz = regMail.test(mail);
    if(sprawdz){
        elMail2.disabled = false;
        elMail1.disabled = true;
        elMail2.focus();
    }else{
        elKomunikat.innerHTML = 'Błędny mail';
        elMail1.focus();
    }
}

function blokujMail(){
    if(elMail1.value != elMail2.value){
        elKomunikat.innerHTML = 'Pola mail są różne';
        elMail1.disabled = false;
        elMail2.disabled = true;
        elMail1.focus();
        elMail2.value = '';
    }else{
        elKomunikat.innerHTML = '';
        this.disabled = true;
    }
}

function sprawdzPass(){
    let pass = elPass1.value;
    let sprawdz = regPass.test(pass);
    if(sprawdz){
        elPass2.disabled = false;
        elPass1.disabled = true;
        elPass2.focus();
    }else{
        elKomunikat.innerHTML = 'Błędne hasło';
        elPass1.focus();
    }
}

function blokujPass(){
    if(elPass1.value != elPass2.value){
        elKomunikat.innerHTML = 'Pola hasło są różne';
        elPass1.disabled = false;
        elPass2.disabled = true;
        elPass1.focus();
        elPass2.value = '';
    }else{
        elKomunikat.innerHTML = '';
        this.disabled = true;
    }
}

function sprawdzRegulamin(){
    if(elRegulamin.checked){
        elPrzycisk.disabled = false;
    }else{
        elPrzycisk.disabled = true;
    }
}

function odblokuj(){
    let zablokowane = document.querySelectorAll('input[disabled]');
    //console.log(zablokowane);
    if(zablokowane.length > 0){
        for (let i=0; i < zablokowane.length; i++)
            zablokowane[i].disabled = false;
    }
}

function wyslij(){
    let puste = false;
    let pola = document.querySelectorAll('input');
    //console.log(pola);
    for (let i=0; i < pola.length; i++){
        if(pola[i].value == ''){
            puste = true;
            break;
        }
    }
    if (puste){
        elKomunikat.innerHTML = 'Wypełnij wszystkie pola';
    }else{
        document.write('<div>');
            document.write('<h3>Rejestracja zakończona powodzeniem</h3>');
            document.write('Imię: ' + elImie.value + '<br>');
            document.write('Nazwisko: ' + elNazwisko.value + '<br>');
            document.write('Login: ' + elLogin.value + '<br>');
            document.write('Mail: ' + elMail1.value + '<br>');
            document.write('Data urodzenia: ' + elData.value + '<br>');
        document.write('</div>');
    }
}

function sprawdzHaslo() {
    let pass = elPass1.value;
    let sprSilne = regPass.test(pass);
    let sprSrednie = regPassSrednie1.test(pass);
    //let sprSlabe1 = regPassSlabe1.test(pass);   //4 cyfry
    //let sprSlabe2 = regPassSlabe2.test(pass);   //małe litery (4)
    //let sprSlabe3 = regPassSlabe3.test(pass);   //duże litery (4)
    let sprSlabe4 = regPassSlabe4.test(pass);   //
        elProgress.hidden = false;
        elProgress.value = 1;

    if(sprSilne){
        elProgress.value = 99;
    }else if(sprSrednie){
        elProgress.value = 66;
    }else if( sprSlabe4){
        elProgress.value = 33;
    }
}

//elImie.addEventListener('blur',sprawdzImie);
//elNazwisko.addEventListener('blur',sprawdzNazwisko);
//elLogin.addEventListener('blur',sprawdzLogin);
//elMail1.addEventListener('blur',sprawdzMail);
//elMail2.addEventListener('blur',blokujMail);
elPass1.addEventListener('blur',sprawdzPass);
elPass2.addEventListener('blur',blokujPass);
elRegulamin.addEventListener('change',sprawdzRegulamin);
elPrzycisk2.addEventListener('click',odblokuj);
elPrzycisk.addEventListener('click',wyslij);
elPass1.addEventListener('keyup',sprawdzHaslo);


