
function abrirRegistro(){

    document.getElementById("formularioRegistro").style.display="block";
    document.getElementById("formularioInicio").style.display="none"

}

function abrirInicio(){

    document.getElementById("formularioRegistro").style.display="none";
    document.getElementById("formularioInicio").style.display="block"

}



document.getElementById("botonRegistro").addEventListener("click",abrirRegistro);
document.getElementById("botonIniciar").addEventListener("click",abrirInicio);