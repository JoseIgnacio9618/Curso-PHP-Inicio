
function cambio(e){
    
    e.preventDefault();
    e.target.previousSibling.setAttribute("name","eliminado");
    e.target.parentNode.submit();
}



let inputs = document.querySelectorAll("input.eliminar");

inputs.forEach(e => { e.addEventListener("click", cambio)
    
});