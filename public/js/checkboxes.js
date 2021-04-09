hond = document.getElementById('honden');
kat = document.getElementById('katten');
vogel = document.getElementById('vogels');
reptiel = document.getElementById('reptielen');
knaagdier = document.getElementById('knaagdieren');

hond.addEventListener("change", function(){
    if(hond.checked) {
        document.getElementById('hondenHidden').disabled = true;
    }
    else{
        document.getElementById('hondenHidden').disabled = false;
    }
})

kat.addEventListener("change", function(){
    if(kat.checked) {
        document.getElementById('kattenHidden').disabled = true;
    }
    else{
        document.getElementById('kattenHidden').disabled = false;
    }
})

vogel.addEventListener("change", function(){
    if(vogel.checked) {
        document.getElementById('vogelsHidden').disabled = true;
    }
    else{
        document.getElementById('vogelsHidden').disabled = false;
    }
})

reptiel.addEventListener("change", function(){
    if(reptiel.checked) {
        document.getElementById('reptielenHidden').disabled = true;
    }
    else{
        document.getElementById('reptielenHidden').disabled = false;
    }
})

knaagdier.addEventListener("change", function(){
    if(knaagdier.checked) {
        document.getElementById('knaagdierenHidden').disabled = true;
    }
    else{
        document.getElementById('knaagdierenHidden').disabled = false;
    }
})