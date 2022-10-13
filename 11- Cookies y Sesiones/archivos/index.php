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
/*La diferencia entre cookies y sesiones es que mientras 
las primeras guardan la informacion en la memoria del navegador del usuario 
las sesiones la guardan en la memoria del servidor.

En cualquier caso con las cookies podemos recuperar la conexion al cerrar el navegador, 
con las sesiones no */

//Cookies


        /* los parametros son en primer lugar el nombre de la cookie,
            el segundo es el valor de la cookie 
            el tercero es cuando esa cookie va a expirar 
            el resto son opcionales y son 
            directorio en el que se van a utilizar 
            dominio en el que se va a utilizar, en nuestro caso seria localhost
            */


        //Asi se crea la cookie
        //setcookie("usuario","contacto@correo.com",time()+ 84600, "archivos/index.php","localhost");

        //Asi se lee una cookie
        //echo $_COOKIE['usuario'];

        /*Para borrarla se vuelve a crear pero restandole el tiempo 
        que le pusimos*/
        
        //setcookie("usuario","contacto@correo.com",time() - 84600)





        
//Sesiones
   
    //Esta sentencia le da nombre a la sesion (no es el id)
    session_name("sesion");
    /*Esta sentencia le da nombre a la sesion aunque es opcional 
    y no tiene mucho sentido ya que tendriamos que dar uno distinto a cada usuario
    */
    session_id("132156465846");

    //Esta sentencia inicializa la sesion
    session_start();

    //Asi se crea una variable dentro de la sesion 
     $_SESSION['Sesion'] =  "Ignacio";


    //session_save_path() te da la ubicacion donde se guardan los archivos 
     var_dump($_SESSION, session_save_path(),);

    
    //Con este comando se destruyen las variables 
    //session_unset();
    //Con este comando se destruyen las sesiones
    //session_destroy();
             

?>


</body>
</html>