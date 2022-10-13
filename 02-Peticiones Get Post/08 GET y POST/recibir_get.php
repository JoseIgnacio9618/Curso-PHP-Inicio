<?php


	//Asi se guarda en una variable el metodo post para guardar cualquier dato que 
	//queramos obtener de un formulario

	$usuario = $_GET['tipo_usuario'];
	$navegador = $_GET['navegador'];

	echo "El usuario es " . $usuario . " y tiene el navegador " . $navegador;
?>