<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="boton.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="estilos.css">
	
	<title>Document</title>
</head>
<body>

<div id="bienvenida">

<?php
$conexion = new mysqli("localhost", "Pruebas 1","pardopere1","prueba 1");

if($conexion->connect_error){
	die("Conexión fallida: " . $conexion->connect_error);
}





$correo = $_POST["usuario"];
$contraseña = $_POST["password"];


$query= "SELECT * FROM `usuarios` WHERE correo = '$correo'";

$numeroColumnas=mysqli_num_rows($conexion->query($query));

$buscarpass = mysqli_fetch_array($conexion->query($query));

if($numeroColumnas==1 && password_verify($contraseña,$buscarpass['contraseña'])){
		echo "Bienvenido: " .$buscarpass['nombre'];
}
	else{
		echo "<script> alert('Usuario o contraseña incorrecto');window.location='index.php'</script>";
	}

?>

</div>


<script src="scriptmenu.js"></script>





</body>
</html>