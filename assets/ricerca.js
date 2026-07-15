function sistema(value){
    return value.toLowerCase().trim();
}
const input= document.getElementById("ricerca");
const righe = document.querySelectorAll(
    "tr.riga-presente, tr.riga-assente"
);

document.getElementById("ricerca").addEventListener("input", function(){
        var ricerca= sistema(input.value);
        righe.forEach(function(riga){
        var nome = sistema(riga.querySelector("td:nth-child(2)").textContent);

        if (ricerca === "" || nome.includes(ricerca)) {
            riga.style.display = "";
        } else {
            riga.style.display = "none"; // rendo il diplay none nascondndola
        }
    });
});

/*
    perchè ho usato include?
    con le stringa cerca se c'è quella stringa dentro un'altra stringa

*/