<?php

//Funciones para strings

$mensaje = "Mama hoy no voy a comer";

//Longitud

echo strlen($mensaje). "<br><br>" ;

//Numero de palabras

echo str_word_count($mensaje). "<br><br>";

//Reversa

echo strrev($mensaje);

echo "<br><br>";

//Encontrar texto 

echo strpos($mensaje, "hoy") . "<br><br>";

//Remplazar texto 

echo str_replace("no"," ",$mensaje). "<br><br>";

//Convertir a minusculas 

echo strtolower($mensaje). "<br><br>";

//Convertir a minusculas 

echo strtoupper($mensaje). "<br><br>";

//Comparar cadenas, devuelve 0 si las cadenas son iguales, si no la diferencia de bytes 

strcmp("hola","adios"). "<br><br>";


//Substraer cadena desde una posicion hasta el final y cuantos lugares quita

echo substr($mensaje,11,4). "<br><br>";


//remover espacios en blanco(solo deja los necesarios)

echo trim($mensaje)

?>