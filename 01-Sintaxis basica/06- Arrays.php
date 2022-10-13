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
//Declaracion de array tipo 1

$frutas = array("Platano","Manzana","Uvas","Fresa");

//Declaracion de array tipo 2

$frutas2 = array("Platano"=>12,"Manzana" => 52,"Uvas" => 45,"Fresa" => 58);


//Metodo para añadir elementos al final de un array

array_push($frutas, "Kiwi");

print_r($frutas);

echo $frutas[2];

echo "<br>";

//Funcion para contar cuantos valores hay en un array

echo count($frutas) . "elemenmtos" ."<br><br>";

//Bucle para iterar un array tipo 2 key son los elementos del array y value los valores

foreach ($frutas2 as $key => $value) {
    
    echo $key. " tiene el valor de " . $value . "<br><br>";

};




//algunos metodos

//Ordena de forma aleatoria los valores del array 
//shuffle()




?>

</body>
</html>