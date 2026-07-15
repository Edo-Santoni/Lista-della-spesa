// modale per sicurezza
function chiudiBollaPulisci(){
    document.getElementById("modaleConfermaPulisci").style.display = "none";

}
function apriBollaPulisci(){
    document.getElementById("modaleConfermaPulisci").style.display = "flex";

}
function chiudiBollaElimina(){
    document.getElementById("modaleConfermaElimina").style.display = "none";

}
function apriBollaElimina(id){
    document.getElementById("id").value=id;
    document.getElementById("modaleConfermaElimina").style.display = "flex";

}

