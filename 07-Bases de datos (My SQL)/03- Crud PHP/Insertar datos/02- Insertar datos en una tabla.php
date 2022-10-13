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

    <div id="invitados">

    
    <?php

        //Realizamos la conexion a la base de datos

        $servidor="localhost";
        $nombreusuario= "Pruebas 1";
        $contraseña= "pardopere1";
        $db = "prueba 1";
        


        $conexion= new mysqli($servidor,$nombreusuario,$contraseña,$db);


        //realizamos el volcado de datos 

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = $_POST['fechadeadmision'];

        $sql = "INSERT INTO `invitados`( `Nombre`, `Apellido`, `Fecha inicio`) VALUES ('$nombre','$apellido','$fecha')";
        
        
        if($_POST['nombre'] != "" && $_POST['apellido']!= "" && $_POST['fechadeadmision']!= ""){
            $conexion->query($sql);
            echo "Se han enviado los datos correctamente";
        }
        else{echo "La conexión ha fallado, no se ha realizado el envio";}


        $conexion->close();

        
        
    ?>
    

    </div>

</body>
</html>


