//Peticion de nombre

function pedirNombre(){
   
    if(localStorage.getItem("nombre")!==null){
        
        document.getElementById("Titulo").innerText="Bienvenido " + localStorage.getItem("nombre") + ", este es un conversor de divisas";
    }else{
        nombre=prompt("¿Cual es tu nombre?");
        localStorage.setItem("nombre",nombre);
        document.getElementById("Titulo").innerHTML="Bienvenido "+ localStorage.getItem("nombre") + ", este es un conversor de divisas";
        
    }
}


function limpiarCookies(){
    let confirmacion=confirm("¿Estas seguro?")
    if(confirmacion==true){localStorage.clear();}
        else{alert("No se borraron las cookies")} 
}


document.getElementById("limpiarCookies").addEventListener("click",limpiarCookies)

pedirNombre()






//Api conversor


function ObtenerMonedas(){
    let myHeaders = new Headers();
    myHeaders.append("apikey", "Gta6NypoG3nosPGioU0iK1vt7qLm3Or6");
    
    let requestOptions = {
      method: 'GET',
      redirect: 'follow',
      headers: myHeaders
    };
    
    fetch("https://api.apilayer.com/exchangerates_data/symbols", requestOptions)
      .then(response => response.json())
      .then(result => {

       let acronimos=Object.keys(result.symbols);
       let values=Object.values(result.symbols);
       let contador=0;
        


        values.forEach(e=>{
            
            document.getElementById("Moneda1").innerHTML+=`<Option value='${acronimos[contador]}'>${e}</Option>`;
            contador=contador+1
        });
        contador=0
        values.forEach(e=>{
                
                
                document.getElementById("Moneda2").innerHTML+=`<Option value='${acronimos[contador]}'>${e}</Option>`;
                contador=contador+1
            });
      
        
    
    
    }
      
      
      
      
      )
    .catch(error => console.log('error', error));}


function convertir(){
    
   
    let Moneda1=document.getElementById("Moneda1");
    let Moneda2=document.getElementById("Moneda2");
    let Cuantia1=document.getElementById("Cuantia1");
    let Cuantia2=document.getElementById("Cuantia2");
    
    let myHeaders = new Headers();
    myHeaders.append("apikey", "Gta6NypoG3nosPGioU0iK1vt7qLm3Or6");
    
    let requestOptions = {
      method: 'GET',
      redirect: 'follow',
      headers: myHeaders
    };    

        


       fetch(`https://api.apilayer.com/exchangerates_data/convert?to=${Moneda2.value}&from=${Moneda1.value}&amount=${Cuantia1.value}`, requestOptions)
  .then(response => response.json())
  .then(result =>{Cuantia2.value=result.result}
  
    )
  .catch(error => console.log('error', error));}






  function convertir2(){
    
   
    let Moneda1=document.getElementById("Moneda1");
    let Moneda2=document.getElementById("Moneda2");
    let Cuantia1=document.getElementById("Cuantia1");
    let Cuantia2=document.getElementById("Cuantia2");
    
    let myHeaders = new Headers();
    myHeaders.append("apikey", "Gta6NypoG3nosPGioU0iK1vt7qLm3Or6");
    
    let requestOptions = {
      method: 'GET',
      redirect: 'follow',
      headers: myHeaders
    };    
    

   

    fetch(`https://api.apilayer.com/exchangerates_data/convert?to=${Moneda1.value}&from=${Moneda2.value}&amount=${Cuantia2.value}`, requestOptions)
    .then(response => response.json())
    .then(result =>{Cuantia1.value=result.result}
    
      )
    .catch(error => console.log('error', error));
  
    }
    
  






ObtenerMonedas()
document.getElementById("Cuantia1").addEventListener("change",convertir)
document.getElementById("Cuantia2").addEventListener("change",convertir2)





//Imagenes


function Ocultar(e){
  e.target.style.visibility= "hidden";
}
function mostrar(){
  imagenes.forEach(e=>e.style.visibility="visible")
}


let imagenes=document.querySelectorAll("img")
document.getElementById("reaparecerFotos").addEventListener("click",mostrar)
imagenes.forEach(e=>e.addEventListener("mouseover",Ocultar))
