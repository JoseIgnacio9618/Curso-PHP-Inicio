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

    //Bucle for (para controlar cuantas veces se ejecuta un codigo)

    for($i=0; $i<5; $i++){
    
        echo "<h1>Hola buenas</h1>";
    
    }

    //Bucle while (El codigo se repite hasta que se cumpla una condicion)
    
    while (rand(1,10)!=5) {

        echo rand(1,10);

    }
        

    
    ?>
    
</body>
</html>