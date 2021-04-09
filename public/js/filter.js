let checkbox_honden = document.getElementById("Honden");
let checkbox_katten = document.getElementById("Katten");
let checkbox_vogels = document.getElementById("Vogels");
let checkbox_reptielen = document.getElementById("Reptielen");
let checkbox_knaagdieren = document.getElementById("Knaagdieren");

let list_of_animals = document.getElementsByTagName("li");


checkbox_honden.checked = true;
checkbox_katten.checked = true;
checkbox_vogels.checked = true;
checkbox_reptielen.checked = true;
checkbox_knaagdieren.checked = true;




checkbox_honden.addEventListener('change', function(){
    if(checkbox_honden.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Hond'){
                list_of_animals[i].style.display = '';
            }
    
        }
    }
    else if(!checkbox_honden.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Hond'){
                list_of_animals[i].style.display = 'none';
            }
    
        }
    }
})

checkbox_katten.addEventListener('change', function(){
    if(checkbox_katten.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Kat'){
                list_of_animals[i].style.display = '';
            }
    
        }
    }
    else if(!checkbox_katten.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Kat'){
                list_of_animals[i].style.display = 'none';
            }
    
        }
    }
})

checkbox_vogels.addEventListener('change', function(){
    if(checkbox_vogels.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Vogel'){
                list_of_animals[i].style.display = '';
            }
    
        }
    }
    else if(!checkbox_vogels.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Vogel'){
                list_of_animals[i].style.display = 'none';
            }
    
        }
    }
})

checkbox_reptielen.addEventListener('change', function(){
    if(checkbox_reptielen.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Reptiel'){
                list_of_animals[i].style.display = '';
            }
    
        }
    }
    else if(!checkbox_reptielen.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Reptiel'){
                list_of_animals[i].style.display = 'none';
            }
    
        }
    }
})

checkbox_knaagdieren.addEventListener('change', function(){
    if(checkbox_knaagdieren.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Knaagdier'){
                list_of_animals[i].style.display = '';
            }
    
        }
    }
    else if(!checkbox_knaagdieren.checked){
        for(let i=0; i<list_of_animals.length; i++){
            if(list_of_animals[i].dataset.kindOfAnimal == 'Knaagdier'){
                list_of_animals[i].style.display = 'none';
            }
    
        }
    }
})



