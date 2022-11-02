<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacenamiento en cookies</title>
    <link href="Estilos.css"
      rel="stylesheet" type="text/css">
</head>
<body>
    <button id="limpiarCookies"> Borrar cookies</button>
     <Header>

        <h1 id="Titulo">Bienvenido</h1>
        
     </Header>
     <br>
     
     <section>

        <form  method="post">
            Monedas
        <div>
            <select name="Moneda1" id="Moneda1">
               <Option value="eur">Euro</Option>

            </select>
            <select name="Moneda2" id="Moneda2">
               <Option>Gbp</Option>

            </select>   
           
           
        </div>

            Cuantias
        <div>
           <input type="text" name="Cuantia1" id="Cuantia1">
        <input type="text" name="Cuantia2" id="Cuantia2">
        </div>
        </form>
        
       

     </section>
     



      
     <script src="scripts.js"></script>
</body>
</html>