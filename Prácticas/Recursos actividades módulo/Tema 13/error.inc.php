<?php

function error_personalizado($tipo, $mensaje, $archivo, $linea){
    echo "<p class='error'> Ha ocurrido un error.</p>";
    echo "<p class='error'> Por favor, inténtelo más tarde.</p>";
    echo "<p class='error'> Tipo error: $tipo.</p>";
    echo "<p class='error'> Mensaje error: $mensaje.</p>";
    echo "<p class='error'> En la linea $linea del archivo $archivo. $tipo</p>";
}
set_error_handler("error_personalizado");
?>
