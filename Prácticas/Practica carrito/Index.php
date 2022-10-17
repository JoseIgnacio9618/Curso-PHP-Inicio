
<?php
    include_once "sesion.php";
    
	
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php include 'styles.css'; ?>
    </style>
    
    <title>Inicio Tienda</title>
</head>
<body>
    

    




    <div class="barranavegacion">
        <a href="index.php" class="botonnavegacion">Inicio</a>
        <a href="Juguetes.php" class="botonnavegacion">Juguetes</a>
        <a href="Libros.php" class="botonnavegacion">Libros</a>
        <button class="botonnavegacion" id="botoncarrito">Carrito</button>
    </div>
    <div class="barranavegacion2">
        <a href="index.php" class="botonnavegacion">Inicio</a>
        <a href="Juguetes.php" class="botonnavegacion">Juguetes</a>
        <a href="Libros.php" class="botonnavegacion">Libros</a>
        <button class="botonnavegacion" id="botoncarrito">Carrito</button>
    </div>


    <div class="carrito" id="carrito" >
        
    
    <?php
    
    include_once "Apis/crearcarrito.php"
    
    ?>
    </div>


    
<div class="contenedor">


    <?php
        include_once "Librerias/DB.php";
        //obtenemos datos de la tabla, order by sirve para obtener los datos segun el orden de una columna especifica

        $sql= "SELECT * FROM `productos` ORDER BY `productos`.`Categoria` ASC";
        // al hacer el query nos da un resultado que aun no podemos utiolizar 
        $resultado = $conexion->query($sql);

        //Aqui la condicion es que el numero de columnas de la tabla sea mayor a 0 
        if($resultado->num_rows > 0){
            
            
            //fetch_assoc() retorna una array de cada fila  que, para el condicional while se evalua como true, cuando ya no hay da false 

            while($row = $resultado->fetch_assoc()){
                
                echo '<form class="producto" method="POST" action="Apis/anadir.php">
                <img src="img/'.htmlspecialchars($row["Foto nombre"]).'" >
                <input name="nombre" type="hidden" value="'.htmlspecialchars($row["Nombre"]).'">
                <p>'.htmlspecialchars($row["Nombre"]).' </p>
                <input name="precio" type="hidden" value="'.htmlspecialchars($row["Precio"]).'">
                <p> Precio: '.htmlspecialchars($row["Precio"]).' Euros</p>
                <input name="cantidad" type="hidden" value="1">
                <button class="Añadir">Añadir al carrito</button>
                </form>
                ';
                
            }
        };   
    ?>


</div>

<script src="main.js"></script>



</body>
</html>