$botones=document.querySelectorAll("button");



function cambio(e){

    $peliculas=document.querySelectorAll("#peliculas div"); 

    $peliculas.forEach(element => {


        if(e.target.id==element.classList.value){

            element.style.display="block"
        }else{
            element.style.display="none"
        }
        
    });
    

}



function inicio(){
    $peliculas=document.querySelectorAll("#peliculas div"); 

    $peliculas.forEach(element => {


        if(element.classList.value==1){

            element.style.display="block"
        }else{
            element.style.display="none"
        }
        
    });
    

};


$botones.forEach(e => {
    
e.addEventListener("click",cambio)


});


inicio();