
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

<form action="actualizar tabla.php" method="post">
    <h1>¿Cual es tu lenguaje de programacion favorito?</h1>




    <input type="radio" name="Lenguaje" id="" value="C" class="opcion">C
    <br>
    <input type="radio" name="Lenguaje" id=""  value="C++" class="opcion">C++
    <br>
    <input type="radio" name="Lenguaje" id="" value="Java" class="opcion">Java
    <br>
    <input type="radio" name="Lenguaje" id="" value="Swift" class="opcion">Swift
    <br>
    <input type="radio" name="Lenguaje" id=""  value="Python" class="opcion">Python
    <br>
    <br>
    <input type="submit" value="Votar">



    
</div>
</form>
</div>






</body>
</html>