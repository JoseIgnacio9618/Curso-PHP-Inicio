<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();


if(isset($_SESSION["newsession"])){
    if(isset($_POST['clave'])){
        $_SESSION["newsession"]= $_POST['clave'];

    };}

if(isset($_SESSION["newsession"])){
    if($_SESSION["newsession"]=="1"){

        echo 'bienvenido';
    }elseif (isset($_SESSION["newsession"]) && $_SESSION["newsession"]!=="1") {
        echo 'Contraseña incorrecta';
        echo'
    <form action="" method="post">
    
    <input type="text" name="clave" id="" placeholder="clave">
    <input type="submit" value="enviar">
    
    </form>
    ';
    
        };
}
if(isset($_SESSION["newsession"])){
    if(isset($_POST['clave'])){
        $_SESSION["newsession"]= $_POST['clave'];

    };
}else{
    if(isset($_POST['clave'])){
        $_SESSION["newsession"]= $_POST['clave'];

    };

    echo'
<form action="" method="post">

<input type="text" name="clave" id="" placeholder="clave">
<input type="submit" value="enviar">

</form>
';}
?>
</body>
</html>