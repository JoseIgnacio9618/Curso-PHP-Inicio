<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="default">
<?php

function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        
        
        $ruta_completa = array();
        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
                
           if(pathinfo($archivo, PATHINFO_EXTENSION)=="jpg" || pathinfo($archivo, PATHINFO_EXTENSION)=="gif"){
            array_push($ruta_completa, $archivo);
                }
           }

           
        
            

            foreach ($ruta_completa as $key => $value) {
                echo '<img class="Fotos" src="Fotos/'.htmlspecialchars($value).'">';
            }
        // Cierra el gestor de directorios
        closedir($gestor);
        
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }}
obtener_estructura_directorios("Fotos");  
?> 
<style>
.Fotos{
    witdh:100px;
    height:100px;
}
</style>

<script>
function  dartamaño(e){
    e.target.classList.toggle('Fotos');
    
}
let fotos= Array.prototype.slice.call(document.getElementsByClassName("Fotos"))

fotos.forEach(element => {
    element.addEventListener("click", dartamaño)
});
</script>
</table>
</body>
</html>