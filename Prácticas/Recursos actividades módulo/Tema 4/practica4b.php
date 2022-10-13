<?php
$quiniela = array(
    "Partido1" => array(TRUE, TRUE, FALSE),
    "Partido2" => array(TRUE, FALSE, FALSE),
    "Partido3" => array(FALSE, TRUE, FALSE),
    "Partido4" => array(FALSE, TRUE, FALSE),
    "Partido5" => array(TRUE, FALSE, FALSE),
    "Partido6" => array(TRUE, FALSE, TRUE),
    "Partido7" => array(FALSE, FALSE, TRUE),
    "Partido8" => array(TRUE, TRUE, FALSE),
    "Partido9" => array(FALSE, TRUE, TRUE),
    "Partido10" => array(TRUE, TRUE, TRUE),
    "Partido11" => array(TRUE, FALSE, TRUE),
    "Partido12" => array(FALSE, FALSE, TRUE),
    "Partido13" => array(TRUE, FALSE, FALSE),
    "Partido14" => array(TRUE, FALSE, FALSE),
    "Pleno15" => array(TRUE, TRUE, TRUE)
);
?>
<html>
    <head>
        <title>Gane con nosotros</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?
        echo "<p>Su apuesta:</p>";
        foreach ($quiniela as $clave => $valor) {
            echo "$clave: ";
            if ($valor[0])
                echo "<b>1</b>";
            if ($valor[1])
                echo "<b>X</b>";
            if ($valor[2])
                echo "<b>2</b>";
            echo "<br>";
        }
        ?>
    </body>
</html>