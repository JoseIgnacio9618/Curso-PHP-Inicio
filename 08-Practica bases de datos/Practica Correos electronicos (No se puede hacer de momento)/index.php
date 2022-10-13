<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
<section id="Formulariocontacto">
        <h1>Contacto</h1>
        <form method="post" action="enviarCorreo.php">

            <p id="titulosFormulario">Nombre</p><input type="text" name="nombre" class="nombreformulario">
            <p id="titulosFormulario">Apellidos</p><input type="text" name="apellidos" >
            <p id="titulosFormulario">Email</p><input type="email" name="email">
            <p id="titulosFormulario">Mensaje</p><textarea name="mensaje" class="mensaje" ></textarea>
            
            <div >
                <button type="submit" id="botonenviar" >enviar</button>
            </div> 
                
        </form>

        
    </section> 
</body>
</html>