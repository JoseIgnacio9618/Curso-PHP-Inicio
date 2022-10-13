<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="02- Insertar datos en una tabla.php" method="post">

        <input type="text" name="nombre" id="nombre">
        <input type="text" name="apellido" id="nombre">
        <input type="date" name="fechadeadmision" id="fechadeadmision">
        <input type="submit" value="Enviar ">

    </form>


    <h1>Estos son los invitados:</h1>
    <div id="invitados">

    
    <?php

        //Realizamos la conexion a la base de datos

        $servidor="localhost";
        $nombreusuario= "Pruebas 1";
        $contraseña= "pardopere1";
        $db = "prueba 1";
        


        $conexion= new mysqli($servidor,$nombreusuario,$contraseña,$db);

        //obtenemos datos de la tabla, order by sirve para obtener los datos segun el orden de una columna especifica

        $sql= "SELECT * FROM `invitados` ORDER BY `invitados`.`nombre` ASC";
        // al hacer el query nos da un resultado que aun no podemos utiolizar 
        $resultado = $conexion->query($sql);

        //Aqui la condicion es que el numero de columnas de la tabla sea mayor a 0 
        if($resultado->num_rows > 0){
            
            
            //fetch_assoc() retorna una array de cada fila  que, para el condicional while se evalua como true, cuando ya no hay da false 

            while($row = $resultado->fetch_assoc()){
                
                echo $row['nombre'] .  " " . $row['apellido'] ."<br> <br>";
                
            }
            

        };

    ?>
    

    </div>

</body>
</html>