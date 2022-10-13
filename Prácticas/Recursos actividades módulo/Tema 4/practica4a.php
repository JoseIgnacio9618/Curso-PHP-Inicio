    <?php

    $numeros = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    for ($i = 0; $i <= 9; $i++) {
        switch ($i) {
            case 0:
                $factorial[$i] = 1;
                break;
            case 1:
                $factorial[$i] = 1;
                break;
            default:
                $factorial[$i] = 1;
                for ($j = 1; $j <= $i; $j++) {
                    $factorial[$i] = $factorial[$i] * $j;
                }
        }
    }
    for ($i = 0; $i <= 9; $i++) {
        echo $factorial[$i];
        echo "<br>";
    }
    ?>