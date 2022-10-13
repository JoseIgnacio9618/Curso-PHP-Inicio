<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>

        body{
            font-family: Arial;
            background-color:black;
            color:white;
        }

        button {
            color: #8707ff;
            border: 2px solid #8707ff;
            border-radius: 10px;
            padding: 10px 25px;
            background: transparent;
            }

            button:hover {
            box-shadow: 2px 2px 15px #8707ff inset;
            }

            button:active {
            box-shadow: 2px 2px 20px #8707ff inset;
            }
        #container{
            width: 80%;
            margin: 0 auto;
        }

        #peliculas{
            width: 100%;
            
            display: flex;
            flex-direction:row;
            flex-wrap: wrap;
            gap: 5%;
            text-align: center;
        }

        img{
            width: 11em;
        }
</style>
    <title>Document</title>
</head>
<body>
<div id="container">
        <div id="paginas">

            <?php
            
            include_once "botonespaginacion.php"

            ?>

       
        </div>

        <div id="peliculas">
        
        
            <?php
            
            include_once "peliculas.php"
            ?>
          
        </div>

    </div> 

    <script src="script.js"></script>
</body>
</html>