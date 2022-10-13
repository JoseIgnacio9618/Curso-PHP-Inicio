<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <h1>Estos son los invitados:</h1>
    <div id="invitados">

    
    <?php

        //Realizamos la conexion a la base de datos

        $servidor="localhost";
        $nombreusuario= "Pruebas 1";
        $contraseña= "pardopere1";
        $db = "prueba 1";
        


        $conexion= new mysqli($servidor,$nombreusuario,$contraseña,$db);



        //borrar datos 

        $nombre2 = $_POST['eliminado'];

        //No me va a dejar eliminar los invitados que ya figuren en la tabla eventos con un evento.

        $sql3 = "DELETE FROM `invitados` WHERE nombre = '$nombre2'";
        
        // se ejecuta la sentencia y se avisa de si ha salido bien.
        
        if($conexion->query($sql3)){echo "Borrado satisfactoriamente";}
            else{echo "no borrado";};



        $conexion->close()
    ?>
    

        <form action="index.php" method="post">
            <input type="submit" value="volver a invitados">
        </form>

    </div>
            <script src="script.js">





            </script>
</body>
</html>