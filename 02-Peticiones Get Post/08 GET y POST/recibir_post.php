<?php

	//Asi se guarda en una variable el metodo post para guardar cualquier dato que 
	//queramos obtener de un formulario
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	

	echo "El usuario es ".$usuario."<br />";
	echo "El password es " . $password."<br />";
?>