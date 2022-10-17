<?php

session_start();


if(isset($_SESSION['carrito'])){
    $carrito_mio=$_SESSION['carrito'];
    $_SESSION['carrito']=$carrito_mio;
    
    };
    $carrito_mio=$_SESSION['carrito'];
    

  foreach ( $carrito_mio as $key => $value) {
       
        

        if($_POST['nombre']==$value['titulo']
        ){
          
            unset( $carrito_mio[$key]);
            
        };
    };

    $carrito_final=[];
    foreach ( $carrito_mio as $key => $value){
        array_push($carrito_final, $value);
    }

    
    $_SESSION['carrito']=$carrito_final;
    

    header("Location: ".$_SERVER['HTTP_REFERER']."");

?>