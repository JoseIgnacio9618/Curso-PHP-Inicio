<?php

function obtener_resultados(){


    $servidor="localhost";
    $nombreusuario= "Pruebas 1";
    $contraseña= "pardopere1";
    $db = "prueba 1";
    $numeroVotos = 0;

    $conexion= new mysqli($servidor,$nombreusuario,$contraseña,$db);

    $sql= "SELECT * FROM `votos` ORDER BY `votos`.`Id` ASC";
    // al hacer el query nos da un resultado que aun no podemos utiolizar 
    $resultado = $conexion->query($sql);
    
//Aqui la condicion es que el numero de columnas de la tabla sea mayor a 0 
    if($resultado->num_rows > 0){
        
        
//fetch_assoc() retorna una array de cada fila  que, para el condicional while se evalua como true, cuando ya no hay da false 

    while($row = $resultado->fetch_assoc()){
    
    $numeroVotos += intval($row['Votos']) ;
    
    };
   
    $resultado2 = $conexion->query($sql);
    while($row = $resultado2->fetch_assoc()){



        echo $row['Lenguaje'].
        '<div id="container" style="width:100%; height:35px;  ">
        <div id="progress-bar" style="width:' .htmlspecialchars(round(intval($row["Votos"])/$numeroVotos*100,2)).'%;
             height:35px;">' .round(intval($row["Votos"])/$numeroVotos*100,2). "%".'
        </div>
        </div> <br>';

    };

};

}



function actualizar_tabla(){


    $servidor="localhost";
    $nombreusuario= "Pruebas 1";
    $contraseña= "pardopere1";
    $db = "prueba 1";


    $conexion = new mysqli($servidor,$nombreusuario,$contraseña,$db);

    $lenguaje = $_POST['Lenguaje'];

    $sql = "UPDATE `votos` SET Votos = Votos + 1 WHERE Lenguaje='$lenguaje'";

    $conexion->query($sql);

    
    
}

    









?>