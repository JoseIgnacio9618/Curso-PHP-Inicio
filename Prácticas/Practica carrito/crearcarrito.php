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
    $titulos = [];

    if(isset($_SESSION['carrito'])){
        for($i=0;$i<=count($carrito_mio)-1;$i ++){
            

            array_push($titulos, $carrito_mio[$i]["titulo"]);
              
            
            //echo $carrito_mio[$i]["titulo"] ."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp precio: ".htmlspecialchars($carrito_mio[$i]["precio"])." Euros".'<br><br>';
        }}
    
     $valores = array_count_values($titulos);
     foreach ($valores as $key => $value) {
        echo $key ."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Cantidad: ".htmlspecialchars($value)." ".'<br><br>'; 
     }



    echo '

            <h3>Productos añadidos '.htmlspecialchars($totalcantidad).' productos</h3>
        
            <form method="POST" action="borrarcarrito.php">
            <input type="submit" class="Añadir" value="Borrar carrito">
            </form>
            <br>
            <form method="POST" action="Realizar pedido">
            <input type="submit" class="Añadir" value="Realizar pedido">
            </form>
            ';
    
    ?>