<html>
    <head>
        <title>Practica 7</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <?php
        include_once("ccorriente.inc.php");
        $c = new Ccorriente("0000-0000-00-0000000001", "1111115858-J",
                        "13/08/2005", 0.0235);
        $c->abonar(785.46, "01/01/2006", "Abono en ventanilla");
        $c->cargar(59.05, "15/02/2006", "Mensualidad canal de televisión");
        echo "El saldo es de " . $c->getSaldo();
        ?>
    </body>
</html>

