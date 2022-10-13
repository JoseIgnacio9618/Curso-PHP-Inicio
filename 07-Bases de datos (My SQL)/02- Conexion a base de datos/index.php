<?php
//Variables necesarias
    $dominio="localhost";
    $nombreusuario= "Pruebas 1";
    $contraseña= "pardopere1";

    $conexion= new mysqli($dominio,$nombreusuario,$contraseña);

    if($conexion -> connect_error){

        die("conexion fallida" . $conexion -> connection_error );
        
    }

   else{
         echo "conexion exitosa";
   } 

?>