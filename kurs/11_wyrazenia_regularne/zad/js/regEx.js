
elHaslo = document.getElementById('haslo');
elPrzyciskHaslo = document.getElementById('przyciskHaslo');
elKomunikat = document.getElementById('komunikat');
elHaslo.focus();
elHaslo.value ='';
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
    }else{
        elKomunikat.innerHTML = 'Błędne hasło!';
    }

}

elPrzyciskHaslo.addEventListener('click',sprawdz);

