<?php
    
    error_reporting(0);
    
    $totalcantidad=0;
    $totaleuros=0;
    $total_cantidad=0;
    if(isset($_SESSION['carrito'])){
    $carrito_mio=$_SESSION['carrito'];
    $_SESSION['carrito']=$carrito_mio;
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

    //Hacemos una lista con los productos seleccionados por el cliente y la cantidad que lleva pedida de cada uno
    $titulos = [];

    if(isset($_SESSION['carrito'])){
        for($i=0;$i<=count($carrito_mio)-1;$i ++){
            
            
                array_push($titulos, $carrito_mio[$i]["titulo"]);
                       
        }}
    
     $valores = array_count_values($titulos);
    

     //Una vez tenemos los valores, realizamos una consulta para sacar el precio y elaborar una tarjeta con esos datos
     foreach ($valores as $key => $value) {

        include_once "Librerias/DB.php";

        
        $sql= "SELECT * FROM `productos`  " ;
        $resultado = $conexion->query($sql);


        while($row = $resultado->fetch_assoc()){
        if($row["Nombre"]==$key){

            echo'
            <div class="articulocarrito">
            <p>'.htmlspecialchars($key).'</p><p>x '.htmlspecialchars($value).'</p><p>Precio: '.htmlspecialchars($row["Precio"]*$value).'</p>
           
            <form method="POST" action="Apis/borrarproducto.php">
            <input type="hidden" name="nombre" value="'.htmlspecialchars($key).'">
            <input type="submit" value="eliminar producto">
            </form>
            </div>
            ' ;

        };
        
        $_SESSION['carrito']=$carrito_mio;
    
    
    
    }
     }

    echo '

            <h3>Productos añadidos '.htmlspecialchars($totalcantidad).' productos</h3>
        <div id="botoneracarrito">
            <form method="POST" action="Apis/borrarcarrito.php">
            <input type="submit" class="Añadir" value="Borrar carrito">
            </form>
            
            <form method="POST" action="realizarpedido.php">
            <input type="submit" class="Añadir" value="Realizar pedido">
            </form>

        </div>
            ';
        
    
    ?>