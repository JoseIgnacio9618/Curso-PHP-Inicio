<?php
session_start();
$primeravez = FALSE;
if (empty($_POST["botEnviar"])) {
    $primeravez = TRUE;
    $_POST["nombre"] = "";
    $_POST["apellidos"] = "";
    $_POST["fechanacimiento"] = "";
    $_POST["direccion"] = "";
    $_POST["poblacion"] = "";
    $_POST["provincia"] = "";
    $_POST["codpostal"] = "";
    $_POST["email"] = "";
    $_POST["telefono"] = "";
}


if (!$primeravez) {
    $valido = TRUE;
    if (empty($_POST["nombre"])) {
        echo "<p class='error'>Falta rellenar el campo Nombre</p>";
        $valido = FALSE;
    }
    if (empty($_POST["apellidos"])) {
        echo "<p class='error'>Falta rellenar el campo Apellidos</p>";
        $valido = FALSE;
    }
    if (empty($_POST["email"])) {
        echo "<p class='error'>Falta rellenar el campo Email</p>";
        $valido = FALSE;
    } elseif (!eregi("^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $_POST["email"])) {
        echo "<p class='error'>Email no v�lido</p>";
        $valido = FALSE;
    }
    if (empty($_POST["password"])) {
        echo "<p class='error'>Falta rellenar el campo Contrase�a</p>";
        $valido = FALSE;
    }

    if ($valido) {
        $nombre = session_id() . ".txt";
        $file = "usuarios/$nombre";
        $fd = fopen($file, "w+");
        foreach ($_POST as $valor) {
            $linea = "$valor\n";
            fwrite($fd, $linea);
            $linea = "";
        }
        fclose($fd);
        header("Location: http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/confirmar.php?archivo=$nombre");
    }

}
?>

<html>
    <head>
        <title>Registro en tiendaDETALLES</title>
       
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>

    <body background="images/Fondo.jpg">
        <p class="camporegistro">&nbsp;</p>
        <p class="camporegistro">&nbsp;</p>
        <div id="Layer2" style="position:absolute; left:72px; top:33px; width:699px; height:221px; z-index:2"> 
            <p><strong>DATOS PERSONALES</strong> </p>

            <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table width="100%" border="0" cellpadding="4">
                    <tr> 
                        <td class="camporegistro">Nombre*:</td>
                        <td> <input name="nombre" type="text" id="nombre" size="50" value="<?php echo htmlspecialchars($_POST['nombre']); ?>"> </td>
                    </tr>
                    <tr> 
                        <td class="camporegistro">Apellidos*:</td>
                        <td><input name="apellidos" type="text" id="apellidos" size="70" value="<?php echo htmlspecialchars($_POST['apellidos']); ?>"></td>
                    </tr>
                    <tr> 
                        <td><p class="camporegistro">Fecha de nacimiento:</p></td>
                        <td><input name="fechanacimiento" type="text" id="fechanacimiento" value="<?php echo htmlspecialchars($_POST['fechanacimiento']); ?>"></td>
                    </tr>
                    <tr> 
                        <td height="101" class="camporegistro">Direcci&oacute;n:</td>
                        <td width="90%"> <textarea name="direccion" cols="70" rows="4" id="direccion" value="<?php echo htmlspecialchars($_POST['direccion']); ?>"></textarea> 
                        </td>
                    </tr>
                    <tr> 
                        <td class="camporegistro">Poblaci&oacute;n:</td>
                        <td class="camporegistro"><input name="poblacion" type="text" id="poblacion" size="50" value="<?php echo htmlspecialchars($_POST['poblacion']); ?>">
                            &nbsp;&nbsp;&nbsp;Tel&eacute;fono: 
                            <input name="telefono" type="text" id="telefono" value="<?php echo htmlspecialchars($_POST['telefono']); ?>"></td>
                    </tr>
                    <tr> 
                        <td class="camporegistro">Provincia:</td>
                        <td class="camporegistro"> <select name="provincia" id="provincia"">
                                                           <option <?php if ($_POST["provincia"] == "La Coru�a")
    echo "selected"; ?>>La Coru&ntilde;a</option>
                                <option <?php if ($_POST["provincia"] == "Pontevedra")
    echo "selected"; ?>>Pontevedra</option>
                                <option <?php if ($_POST["provincia"] == "Lugo")
    echo "selected"; ?>>Lugo</option>
                                <option <?php if ($_POST["provincia"] == "Orense")
    echo "selected"; ?>>Orense</option>
                                <option <?php if ($_POST["provincia"] == "Asturias")
    echo "selected"; ?>>Asturias</option>
                                <option <?php if ($_POST["provincia"] == "Cantabria")
    echo "selected"; ?>>Cantabria</option>
                                <option <?php if ($_POST["provincia"] == "Vizcaya")
    echo "selected"; ?>>Vizcaya</option>
                                <option <?php if ($_POST["provincia"] == "Guip�zcoa")
    echo "selected"; ?>>Guip&uacute;zcoa</option>
                                <option <?php if ($_POST["provincia"] == "�lava")
    echo "selected"; ?>>&Aacute;lava</option>
                                <option <?php if ($_POST["provincia"] == "Navarra")
    echo "selected"; ?>>Navarra</option>
                                <option <?php if ($_POST["provincia"] == "La Rioja")
    echo "selected"; ?>>La Rioja</option>
                                <option <?php if ($_POST["provincia"] == "Huesca")
    echo "selected"; ?>>Huesca</option>
                                <option <?php if ($_POST["provincia"] == "Zaragoza")
    echo "selected"; ?>>Zaragoza</option>
                                <option <?php if ($_POST["provincia"] == "Teruel")
    echo "selected"; ?>>Teruel</option>
                                <option <?php if ($_POST["provincia"] == "Lleida")
    echo "selected"; ?>>Lleida</option>
                                <option <?php if ($_POST["provincia"] == "Barcelona")
    echo "selected"; ?>>Barcelona</option>
                                <option <?php if ($_POST["provincia"] == "Girona")
    echo "selected"; ?>>Girona</option>
                                <option <?php if ($_POST["provincia"] == "Tarragona")
    echo "selected"; ?>>Tarragona</option>
                                <option <?php if ($_POST["provincia"] == "Islas Baleares")
    echo "selected"; ?>>Islas Baleares </option>
                                <option <?php if ($_POST["provincia"] == "Castell�n")
    echo "selected"; ?>>Castell&oacute;n</option>
                                <option <?php if ($_POST["provincia"] == "Valencia")
    echo "selected"; ?>>Valencia</option>
                                <option <?php if ($_POST["provincia"] == "Alicante")
    echo "selected"; ?>>Alicante</option>
                                <option <?php if ($_POST["provincia"] == "Huelva")
    echo "selected"; ?>>Huelva</option>
                                <option <?php if ($_POST["provincia"] == "Sevilla")
    echo "selected"; ?>>Sevilla</option>
                                <option <?php if ($_POST["provincia"] == "C�rdoba")
    echo "selected"; ?>>C&oacute;rdoba</option>
                                <option <?php if ($_POST["provincia"] == "Ja�n")
    echo "selected"; ?>>Ja&eacute;n</option>
                                <option <?php if ($_POST["provincia"] == "Granada")
    echo "selected"; ?>>Granada</option>
                                <option <?php if ($_POST["provincia"] == "Almer�a")
    echo "selected"; ?>>Almer&iacute;a</option>
                                <option <?php if ($_POST["provincia"] == "M�laga")
    echo "selected"; ?>>M&aacute;laga</option>
                                <option <?php if ($_POST["provincia"] == "C�diz")
    echo "selected"; ?>>C&aacute;diz</option>
                                <option <?php if ($_POST["provincia"] == "Murcia")
    echo "selected"; ?>>Murcia</option>
                                <option <?php if ($_POST["provincia"] == "C�ceres")
    echo "selected"; ?>>C&aacute;ceres</option>
                                <option <?php if ($_POST["provincia"] == "Badajoz")
    echo "selected"; ?>>Badajoz</option>
                                <option <?php if ($_POST["provincia"] == "Le�n")
    echo "selected"; ?>>Le&oacute;n</option>
                                <option <?php if ($_POST["provincia"] == "Palencia")
    echo "selected"; ?>>Palencia</option>
                                <option <?php if ($_POST["provincia"] == "Burgos")
    echo "selected"; ?>>Burgos</option>
                                <option <?php if ($_POST["provincia"] == "Zamora")
    echo "selected"; ?>>Zamora</option>
                                <option <?php if ($_POST["provincia"] == "Valladolid")
    echo "selected"; ?>>Valladolid</option>
                                <option <?php if ($_POST["provincia"] == "Soria")
    echo "selected"; ?>>Soria</option>
                                <option <?php if ($_POST["provincia"] == "Salamanca")
    echo "selected"; ?>>Salamanca</option>
                                <option <?php if ($_POST["provincia"] == "�vila")
    echo "selected"; ?>>&Aacute;vila</option>
                                <option <?php if ($_POST["provincia"] == "Segovia")
    echo "selected"; ?>>Segovia</option>
                                <option <?php if ($_POST["provincia"] == "Guadalajara")
    echo "selected"; ?>>Guadalajara</option>
                                <option <?php if ($_POST["provincia"] == "Cuenca")
    echo "selected"; ?>>Cuenca</option>
                                <option <?php if ($_POST["provincia"] == "Toledo")
    echo "selected"; ?>>Toledo</option>
                                <option <?php if ($_POST["provincia"] == "Ciudad Real")
    echo "selected"; ?>>Ciudad Real </option>
                                <option <?php if ($_POST["provincia"] == "Albacete")
    echo "selected"; ?>>Albacete</option>
                                <option <?php if ($_POST["provincia"] == "Madrid")
    echo "selected"; ?>>Madrid</option>
                                <option <?php if ($_POST["provincia"] == "Santa Cruz de Tenerife")
    echo "selected"; ?>>Santa Cruz de Tenerife </option>
                                <option <?php if ($_POST["provincia"] == "Las Palmas")
    echo "selected"; ?>>Las Palmas </option>
                            </select> &nbsp;&nbsp;&nbsp;&nbsp;C&oacute;digo Postal: 
                            <input name="codpostal" type="text" id="codpostal" value="<?php echo htmlspecialchars($_POST['codpostal']); ?>"></td>
                    </tr>
                    <tr> 
                        <td class="camporegistro">Email*:</td>
                        <td class="camporegistro"> <input name="email" type="text" id="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                        </td>
                    </tr>
                    <tr> 
                        <td class="camporegistro">Contrase&ntilde;a*: </td>
                        <td class="camporegistro">
                            <input name="password" type="password" id="password">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Repetir contrase&ntilde;a: 
                            <input name="repetirpassword" type="password" id="repetirpassword"></td>
                    </tr>
                    <tr align="center"> 
                        <td colspan="2" class="camporegistro"><input type="submit" name="botEnviar" value="Enviar" id="botEnviar"> 
                            <input type="reset" name="botRestablecer" value="Restablecer" id="botRestablecer2"></td>
                    </tr>
                </table>
            </form>
            <p>&nbsp;</p>
        </div>
        <p>&nbsp; </p>
        <div id="Layer1" style="position:absolute; width:185px; height:24px; z-index:1; left: 23px; top: 0px;"> 
            <p class="titulo"><font color="#0000FF" size="+1" face="Comic Sans MS">tiendaDETALLES.com</font><strong> 
                </strong></p>
        </div>
        <p><span class="titulo"></span></p>
        <p><strong></strong></p>
    </body>
</html>
