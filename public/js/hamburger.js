hamburger = document.getElementById('js--hamburger');
links = document.getElementById('js--navlinks');
hamburger.addEventListener("click", function(){
    if(links.style.display == 'flex'){
        links.style.display = 'none';
    }
    else{
        links.style.display = 'flex'
    }
})