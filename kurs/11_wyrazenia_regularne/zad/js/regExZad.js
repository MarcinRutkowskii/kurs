//Zad. sprawdz czy haslo spelnia wymagania:
// duza litera, mala litera, znak specjalny
//
elHaslo = document.getElementById('haslo');
elKomunikat = document.getElementById('komunikat');
elKomunikat2 = document.getElementById('komunikat2');
elDlugosc = document.getElementById('dlugosc1');
elCyfry = document.getElementById('cyfry');
elDuzaLit = document.getElementById('duzaLit');
elMalaLit = document.getElementById('malaLit');
elZnakSpec = document.getElementById('znakSpec');
elHasloP = document.getElementById('hasloP');
elPrzycisk = document.getElementById('zatwierdz');

elHaslo.focus();
function sprawdz(){
    var pass = elHaslo.value;
    var regCyfra = /\d/;
    var cyfra = regCyfra.test(pass);
    var regLiteraM = /[a-z]/;
    var literaM = regLiteraM.test(pass);
    var regLiteraD = /[A-Z]/;
    var literaD = regLiteraD.test(pass);
    var regZnakSpec = /\W|_/;
    var znak = regZnakSpec.test(pass);
    var dlugosc = elHaslo.value.length;

    if(cyfra && literaM && literaD && znak && dlugosc >= 8){
       elKomunikat.innerHTML = 'Hasło poprawne!';
        elKomunikat.style.color = 'green';
        elHasloP.disabled = false;
        }else{
        elKomunikat.innerHTML = 'Błędne hasło!';
        elKomunikat.style.color = 'red';
        elHasloP.disabled = true;
        }
    if(dlugosc >= 8){
        elDlugosc.innerHTML = '<del>Długość</del>';
        elDlugosc.style.color = '#003afd';

       }else{
        elDlugosc.innerHTML;
       }
    if(cyfra){
        elCyfry.innerHTML = '<del>Cyfra</del>';
        elCyfry.style.color = '#003afd';

       }else{
        elCyfry.innerHTML;
       }
    if(literaD){
        elDuzaLit.innerHTML = '<del>Duża Litera</del>';
        elDuzaLit.style.color = '#003afd';

       }else{
        elDuzaLit.innerHTML;
       }
    if(literaM){
        elMalaLit.innerHTML = '<del>Mała Litera</del>';
        elMalaLit.style.color = '#003afd';

       }else{
        elMalaLit.innerHTML;
       }
    if(znak){
        elZnakSpec.innerHTML = '<del>Znak specjalny</del>';
        elZnakSpec.style.color = '#003afd';

       }else{
        elZnakSpec.innerHTML;
       }
    }
function secondP(){
    var compar = elHaslo.value;
    var comparSec = elHasloP.value;
    if(compar == comparSec){
        elKomunikat2.innerHTML = 'Hasła zgodne';
        elPrzycisk.disabled = false;
        }else{
        elPrzycisk.disabled = true;
        }
    }
function zatwierdz(){
    var compar = elHaslo.value;
    var comparSec = elHasloP.value;
    if(compar == comparSec){
        elKomunikat2.style.color = 'green';
        elKomunikat2.innerHTML = 'Hasła zgodne';
        elHaslo.value ='';
        elHasloP.value ='';
        elKomunikat2.className = 'wynik';
    }else{
        elKomunikat2.style.color = 'red'
        elKomunikat2.innerHTML = 'Hasła niezgodne!';
        elHaslo.value = '';
        elHasloP.value = '';
    }
}


elHaslo.addEventListener('keyup',sprawdz);
elHasloP.addEventListener('keyup',secondP);
elPrzycisk.addEventListener('click',zatwierdz);

