<?php


//Una excepcion es un error en ejecucion ydebe capturarse con una estructura 
//trycatch como la siguiente 

/**En primer lugar, caundo creemos que una funcion puede desencadenar un error,
 * realizamos una extructura como la siguiente para capturar ese error.
 */


 /* Tambien podemos ejecutar el codigo directamente en el try  */
function dividir($n1,$n2){

    if($n2===0){
        throw new Exception("Division por cero ");
    }
        else{
            return $n1/$n2;
        }



};


/**
 * Posteriormente la estructura try catch prueva que el codigo funcione y, 
 * en caso de lanzar el error lo recoje y podemos administrarlo
 */

try {

    echo dividir(2,7);
    echo dividir(5,0);
    
} catch (Exception $excepcion) {
    
//Getmessage nos da el mensaje que indicamos en la excepcion
 echo $excepcion->getMessage();


}finally{
echo ' Todo termino';
}


?>