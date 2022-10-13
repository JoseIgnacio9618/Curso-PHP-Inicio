<?php
switch ($_GET["producto"]) {
    case 1:
        $imagen = "images/decoracion/Deco01.jpg";
        break;
    case 2:
        $imagen = "images/decoracion/Deco02.jpg";
        break;
    case 3:
        $imagen = "images/decoracion/Deco03.jpg";
        break;
    case 4:
        $imagen = "images/decoracion/Deco04.jpg";
        break;
    case 5:
        $imagen = "images/flores/Flores01.jpg";
        break;
    case 6:
        $imagen = "images/flores/Flores02.jpg";
        break;
    case 7:
        $imagen = "images/flores/Flores03.jpg";
        break;
    case 8:
        $imagen = "images/flores/Flores04.jpg";
        break;
    default:
        $imagen = "images/nodisponible.gif";
}
?>
<html>
    <head>
        <title>Práctica 9a PHP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div align="center">
            <table width="82%" border="0" cellpadding="4">
                <tr>
                    <td width="19%"><font color="#0000FF" size="2">DECORACI&Oacute;N</
                            font></td>
                    <td width="51%" rowspan="5"><div align="center"><?php echo "<img
src=$imagen>"; ?></div></td>
                    <td width="30%"><font color="#FF0080" size="2">FLORES</font></td>
                </tr>
                <tr>
                    <td><a href="practica9asolucion.php?producto=1">Figurita de cisne</a></td>
                    <td><a href="practica9asolucion.php?producto=5">Ramo flores 1</a></td>
                </tr>
                <tr>
                    <td><a href="practica9asolucion.php?producto=2">Despertador</a></td>
                    <td><a href="practica9asolucion.php?producto=6">Ramo flores 2</a></td>
                </tr>
                <tr>
                    <td><a href="practica9asolucion.php?producto=3">Reloj de pared</a></td>
                    <td><a href="practica9asolucion.php?producto=7">Ramo flores 3</a></td>
                </tr>
                <tr>
                    <td><a href="practica9asolucion.php?producto=4">L&aacute;mpara de pie</a></
                        td>
                    <td><a href="practica9asolucion.php?producto=8">Ramo flores 4</a></td>
                </tr>
            </table>
        </div>
    </body>
</html>