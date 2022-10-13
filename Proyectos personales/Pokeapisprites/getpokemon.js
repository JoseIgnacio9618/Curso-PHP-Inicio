

document.getElementById("boton").addEventListener("click", getdata)
    let seccion = document.getElementById("ficha")
    const $fragment=document.createDocumentFragment();
    let movimientos = document.getElementById("Moviminetos")
    



async function getdata(){
    
try {
    seccion.innerHTML=""
    movimientos.innerHTML=""
    let datos=await fetch(`https://pokeapi.co/api/v2/pokemon/${document.getElementById("texto").value.toLowerCase() }`);
    let datospokemon=await datos.json();
    console.log(datospokemon)

    let arraySprites=[]
    let arrayMoves=[]
    for (const key in datospokemon.sprites) {
       arraySprites.push(datospokemon.sprites[key])
    }


    
    for (const key in datospokemon.moves) {
        
        arrayMoves.push(datospokemon.moves[key])
     }
     
    

    arraySprites.forEach((e)=>{

    if(typeof e=="string"){

    let foto = document.createElement("img")
        foto.src=e
        $fragment.appendChild(foto)       
    }
    }
    )

    seccion.appendChild($fragment);

    arrayMoves.forEach(el=>{
        let marca = document.createElement("h1");        
        marca.innerHTML=el.move.name
        movimientos.appendChild(marca)    
    })
} 


catch (error) {   
    seccion.innerHTML="Eres un pedazo de gilipollas eso no es un pokemon" + error
}    
}