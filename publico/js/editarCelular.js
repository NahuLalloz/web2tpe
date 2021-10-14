"use strict"

let btnEditCel = document.querySelectorAll(".btnEditarCel-js");
for(let i=0; i<btnEditCel.length;i++){
    btnEditCel[i].addEventListener("click", function (){
        let tds = btnEditCel[i].closest("tr").querySelectorAll("td");
        let id = btnEditCel[i].getAttribute("id");
        mostrarModalSerie(tds, id);
    });
}

document.querySelector(".btn-cancelarCel").addEventListener("click", ocultarModal);

let boxSerie = document.querySelector("#box-editarCelular");

 
function mostrarModalCelular(tds, id) {
    boxCelular.classList.add("show-windows");
    boxCelular.classList.remove("hidden-windows");
    imprimirDatos(tds);
    
    document.querySelector(".btn-guardarCel").setAttribute("value", id);
}
function imprimirDatos(tds){
    let editarCel = document.querySelectorAll(".input-editarCel");

    
    let nombre = tds[0].innerHTML;
    editarCel[0].value= nombre;


    let caract = tds[1].innerHTML;
    editarCel[1].value= caract;

    let stock = tds[3].innerHTML;
    editarCel[3].value= stock;

    
    let opcion = tds[4].innerHTML;
    let opcionExistente = document.querySelector(".opcionExistente");
    opcionExistente.innerHTML = opcion;
    opcionExistente.setAttribute("value", tds[4].getAttribute("id"));
}
function ocultarModal(){
    boxSerie.classList.add("hidden-windows");
    boxSerie.classList.remove("show-windows");
}