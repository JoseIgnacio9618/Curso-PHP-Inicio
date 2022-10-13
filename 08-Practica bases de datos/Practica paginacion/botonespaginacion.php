<?php


//Hacemos la conexion a la base de datos
$servidor="localhost";
$nombreusuario= "Pruebas 1";
$contraseña= "pardopere1";
$db = "prueba 1";


$conexion= new mysqli($servidor,$nombreusuario,$contraseña,$db);

 //obtenemos datos de la tabla, order by sirve para obtener los datos segun el orden de una columna especifica

 $sql= "SELECT * FROM `peliculas` ORDER BY `peliculas`.`id` ASC";
 // al hacer el query nos da un resultado que aun no podemos utiolizar 
 $resultado = $conexion->query($sql);

$numerodegrupos = ($resultado->num_rows)/3;

for($i=1;$i<$numerodegrupos+1;$i++){

    echo "<button id='".htmlspecialchars($i)."'>".htmlspecialchars($i)."</button>";
}


?>