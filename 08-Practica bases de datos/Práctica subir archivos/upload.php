<?php


//Primero creamos la ruta donde se va  a guardar el archivo 
//basename devuelve el nombre del archivo ["name"] indica que se refiere al archivo en el ordenador del cliente

$archivo = "uploads/" . basename($_FILES["file"]["name"]);


/*Nos da la extension del archivo ej "docx"
 pathinfo da informacion del archivo, en este caso PATHINFO_EXTENSION nos da la extension
 strtolower sirve para pasar la cadena entera a minusculas
*/

$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

// valida que es imagen asi como su tamaño da un array con las caracteristicas de la imagen
//["tmp_name"] indica que nos referimos al archivo temporal que se crea en el servidor 

$checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);



//En primer lugar validamos que sea una imagen 
if($checarSiImagen != false){

    //obtenemos el tamaño de la imagen 
    $size = $_FILES["file"]["size"];
    //si es mayor al permitido lo comunicamos y no lo subimos
    if($size > 500000){
        echo "El archivo tiene que ser menor a 500kb";
    }
    //en caso contrario 
    else{

        //obtenemos la extension y vemos si esta entre las permitidas 
        if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg"){
            // se validó el archivo correctamente
            //Esta linea es la que sube el archivo a la carpeta que le indiquemos
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){
                echo "El archivo se subió correctamente";
            }else{
                echo "Hubo un error en la subida del archivo";
            }
        }else{
            echo "Solo se admiten archivos jpg/jpeg";
        }
    }
}

else{
    echo "El documento no es una imagen";
}


?>
