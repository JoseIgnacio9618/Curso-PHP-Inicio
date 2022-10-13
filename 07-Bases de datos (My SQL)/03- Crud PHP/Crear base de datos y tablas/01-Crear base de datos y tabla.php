<?php 

    //Realizamos la coñexion a la base de datos y comprobamos si esta se cumple. 
    $servidor="localhost";
    $nombreusuario= "Pruebas 1";
    $contraseña= "pardopere1";
    $db = "todolistDB";


    $conexion= new mysqli($servidor,$nombreusuario,$contraseña);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

    else{echo "conexion exitosa";}


    /**Creamos la base de datos  */

    $sql = "CREATE DATABASE todolistDB";
    if($conexion->query($sql) === true){
        echo "Base de datos creada correctamente...";
    }else{
        die("Error al crear base de datos: " . $conexion->error);
    }

    /**Nos conectamos pero esta vez a la base de datos que acabamos de crear
     * Previamente creamos la variable db en la que guardamos el nombre de la base de datos creada
     */

    $conexion2= new mysqli($servidor,$nombreusuario,$contraseña,$db);

/** Creamos  la tabla  */

    $sql = "CREATE TABLE prueba2(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        texto VARCHAR(100) NOT NULL,
        completado BOOLEAN NOT NULL,
        timestamp TIMESTAMP
    )";

    // Se ejecuta el crud dentro del condicional 

    if($conexion2->query($sql) === true){
        echo " La tabla se creó correctamente...";
    }else{
        die(" Error al crear tabla: " . $conexion->error);
    }





?>