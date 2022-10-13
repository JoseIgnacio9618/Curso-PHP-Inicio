<?php

function Burbuja(&$vector) {
    $tam = count($vector);
    for ($i = 1; $i < $tam; $i++) {
        for ($j = $tam - 1; $j >= $i; $j--) {
            if ($vector[$j] < $vector[$j - 1]) {
                $aux = $vector[$j - 1];
                $vector[$j - 1] = $vector[$j];
                $vector[$j] = $aux;
            }
        }
    }
}
?>
<html>
    <head>
        <title>Ordenar un array</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        $a = array(2, 35, 22, 20, 15);
        echo "Contenido inicial del array: ";
        for ($i = 0; $i < count($a); $i++) {
            echo "$a[$i] ";
        }
        Burbuja($a);
        echo "<br>";
        echo "Contenido ordenado del array: <b>";
        for ($i = 0; $i < count($a); $i++) {
            echo "$a[$i] ";
        }
        echo "</b>";
        ?>
    </body>
</html>