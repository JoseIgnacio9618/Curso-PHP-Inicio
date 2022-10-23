<?php


session_start();

unset($_SESSION['carrito']);


header("Location: http://localhost/Curso%20PHP/Curso-PHP-Inicio/Pr%C3%A1cticas/Practica%20carrito/index.php");

//Linea por si se ejecuta en el mac de nuria 
//header("Location: http://localhost/Curso-PHP-Inicio/Pr%C3%A1cticas/Practica%20carrito/index.php");

?>