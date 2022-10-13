<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Estos son los invitados confirme los presentes:</h1>
    <div id="invitados">

    
    <?php

        //Realizamos la conexion a la base de datos

        $servidor="localhost";
        $nombreusuario= "Pruebas 1";
        $contraseña= "pardopere1";
        $db = "prueba 1";
        
        $conexion= new mysqli($servidor,$nombreusuario,$contraseña,$db);


        
        //Actualizar tabla
            //Con esta sentencia se obtiene lo que hay escrito en el cuadro de confirmacion 
        $nombre2 = $_POST['confirmacion'];
        /* Sentencia con la que se actializa invitados cambiando el valor de la columna confirma
            en los lugares donde coincide el valor de la columna nombre con el valor del cuadro 
            de texto
            */
        
        $sql2 = "UPDATE `invitados` SET confirma = 'confirmado' WHERE nombre='$nombre2';";

        /** Se ejecuta la sentencia sql y, si esta se cumple se da un mensaje de correcto*/
        if($conexion -> query($sql2)){echo "Se han actualizado los datos correctamente";}
            else{echo "no se logro actualizar los datos";}

        
        //obtenemos datos de la tabla

        $sql= "SELECT * FROM `invitados`";
        // al hacer el query nos da un resultado que aun no podemos utiolizar 
        $resultado = $conexion->query($sql);

        //Aqui la condicion es que el numero de columnas de la tabla sea mayor a 0 
        if($resultado->num_rows > 0){
            
            echo ' <form action="Actualizar datos.php" method="post">';
            //fetch_assoc() retorna una array de cada fila  que, para el condicional while se evalua como true, cuando ya no hay da false 

            while($row = $resultado->fetch_assoc()){
               //Añadimos un condicional para que solo nos devuelva los valores cuya columna confirma sea null 
                if ($row["confirma"]==NULL) {
                    //htmlspecialchars permite usar valores php como valores para atributos html 
                
                    echo '<input type="text" value="' . htmlspecialchars($row['nombre'] .  " " . $row['apellido'] ) . '" />';
               
                   
                }
                
            }
            
            echo ' <br>A quien quieres confirmar <br>
            <input type="text" name="confirmacion" placeholder="nombre">
            
            ';
                echo '<input type="submit" value="enviar"> </form>';
        };
        
        $conexion->close();

    ?>

    </div>



    <script src="script.js">
        
    
    </script>


</body>
</html>