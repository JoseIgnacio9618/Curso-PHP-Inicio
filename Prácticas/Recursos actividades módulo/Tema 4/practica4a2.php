    <?php

    $a = array(8, 786, 45, 4, 63, 89, 1478, 98);
    $encontrado = FALSE;
    $buscado = 89;
    $i = 0;
    if ($a[$i] == $buscado)
        $encontrado = TRUE;
    else {
        $i = 1;
        do {
            if ($a[$i] == $buscado) {
                $encontrado = TRUE;
            }
            $i++;
        } while ((!$encontrado) && ($i <= 7));
    }
    if ($encontrado)
        echo "Se ha encontrado.";
    else
        echo "No se ha encontrado.";
    ?>