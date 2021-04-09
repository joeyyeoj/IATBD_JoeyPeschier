selector = document.getElementById("role");
checkboxes = document.getElementById("js--checkboxes")
selector.addEventListener("change", function(){
    if(selector.value == "Oppasser"){
        checkboxes.style.display = 'grid';
    }
    else if(selector.value == "Aanbieder"){
        checkboxes.style.display = 'none';
    }
})


