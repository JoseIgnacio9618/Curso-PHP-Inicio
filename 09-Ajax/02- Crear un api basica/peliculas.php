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

$contador=-1;
$grupopelicula=0;
$numerodepeliculas = ($resultado->num_rows)/3;

while($row = $resultado->fetch_assoc()){
                
    //echo $row['id'] .  " " . $row['nombre pelicula'] .  " " . $row['foto pelicula'] ."<br> <br>";
    $contador++;
    if($contador%3==0){

        $grupopelicula++;
    }

    

    echo '<div class="' .htmlspecialchars($grupopelicula). '">
    <p>' . htmlspecialchars($row['nombre pelicula']).'</p>
    <img src="imagenes/'.htmlspecialchars($row['foto pelicula']).'">
    </div>';
}
?>