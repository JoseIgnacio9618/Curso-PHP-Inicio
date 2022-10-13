<?php

include_once 'Includes/funciones.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <style>

    @font-face {
        font-family: fuenteRandom;
        src: url("Fuentes/static/Montserrat-Bold.ttf");
    }

    *{font-family: fuenteRandom;}
    </style>
</head>
<body>

<div class="pregunta">
<h1>Resultados</h1>
    <?php
    
    obtener_resultados();
    
    ?>
    </div>
</body>
</html>