<?php

	$conexion = new mysqli("localhost", "Pruebas 1","pardopere1","prueba 1");

	if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

    else{echo "conexion exitosa";};


	$correo = $_POST["correo"];
	$nombre = $_POST["nombre"];
	$contraseña = $_POST["passwordRegistro"];
	$contraseñaFuerte = password_hash($contraseña,PASSWORD_DEFAULT);

	$queryRegistrar="INSERT INTO `usuarios`(`correo`, `nombre`, `contraseña`) 
	
	VALUES ('$correo','$nombre','$contraseñaFuerte')";

	if($conexion->query($queryRegistrar)){echo "<script> alert('Usuario registrado');window.location='index.php'</script>";};
	
?>