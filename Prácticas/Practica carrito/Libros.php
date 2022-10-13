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
    

    <?php
    include_once "sesion.php";
    
	
    ?>




    <div class="barranavegacion">
        <a href="index.php" class="botonnavegacion">Inicio</a>
        <a href="Juguetes.php" class="botonnavegacion">Juguetes</a>
        <a href="Libros.php" class="botonnavegacion">Libros</a>
        <button class="botonnavegacion" id="botoncarrito">Carrito</button>
    </div>


    <div class="carrito" id="carrito">
        
    
    <?php
    
    
    
    $totalcantidad=0;
    $totaleuros=0;
    if(isset($_SESSION['carrito'])){
    $carrito_mio=$_SESSION['carrito'];
    $_SESSION['carrito']=$carrito_mio;
    $total_cantidad=0;
    }
    // contamos numero de productos del carrito
    if(isset($_SESSION['carrito'])){
        for($i=0;$i<=count($carrito_mio)-1;$i ++){
        if($carrito_mio[$i]!=NULL){ 
        $total_cantidad ++ ;
        $totalcantidad += $total_cantidad;
        $total_cantidad=0;
        
        }}}
    // contamos numero de euros del carrito
    if(isset($_SESSION['carrito'])){
            for($i=0;$i<=count($carrito_mio)-1;$i ++){
            if($carrito_mio[$i]["precio"]!=NULL){
                 
            $totaleuros +=$carrito_mio[$i]["precio"];
            }}}

    echo '<H1>Total = '.htmlspecialchars($totaleuros).' Euros</H1>'; 

    //Hacemos una lista con los productos seleccionados por el cliente

    if(isset($_SESSION['carrito'])){
        for($i=0;$i<=count($carrito_mio)-1;$i ++){
            
         
            
            echo $carrito_mio[$i]["titulo"] ."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp precio: ".htmlspecialchars($carrito_mio[$i]["precio"])." Euros".'<br><br>';


        }}
    
    
    echo '

            <h3>Productos añadidos '.htmlspecialchars($totalcantidad).' productos</h3>
        
            <form method="POST" action="borrarcarrito.php">
            <input type="submit" value="Borrar carrito">
            </form>

            <br>
            <form method="POST" action="Realizar pedido">
            <input type="submit" value="Realizar pedido">
            </form>
            ';
    
    ?>
    </div>


    
<div class="contenedor">


    <?php
        include_once "Librerias/DB.php";
        //obtenemos datos de la tabla, order by sirve para obtener los datos segun el orden de una columna especifica

        //$sql= "SELECT * FROM `productos` ORDER BY `productos`.`Categoria` ASC";
        //$sql= "SELECT * FROM `productos` WHERE Categoria = 'Juguete' "
        $sql= "SELECT * FROM `productos` WHERE Categoria = 'Libro' ";
        // al hacer el query nos da un resultado que aun no podemos utiolizar 
        $resultado = $conexion->query($sql);

        //Aqui la condicion es que el numero de columnas de la tabla sea mayor a 0 
        if($resultado->num_rows > 0){
            
            
            //fetch_assoc() retorna una array de cada fila  que, para el condicional while se evalua como true, cuando ya no hay da false 

            while($row = $resultado->fetch_assoc()){
                
                echo '<form class="producto" method="POST" action="anadir.php">
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