<html>
<head>
<title>Formulario de personalizaci�n</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>




<?php
//Trabajado con cookies
    /*
    if(isset($_COOKIE['nombre']) && isset($_COOKIE['color'])){


    echo "Hola " . htmlspecialchars($_COOKIE['nombre']). " tu color favorito es el " . htmlspecialchars($_COOKIE['color']). "";

    }


      else if(isset($_POST['nombre']) && isset($_POST['color'])){

      setcookie("nombre",$_POST['nombre'],time()+ 2538000);
      setcookie("color",$_POST['color'],time()+ 2538000);
      
      echo '<a href="practica11a.php">Continuar</a>';

      }
        else{
    echo '<form name="form1" method="post" action="practica11a.php">
            <div align="center">
              <table width="43%" border="0" cellpadding="4">
                <tr> 
                  <td colspan="2">Indique los siguientes detalles:</td>
                </tr>
                <tr> 
                  <td width="36%"><strong>Nombre</strong>:</td>
                  <td width="64%"><input name="nombre" type="text" id="nombre"></td>
                </tr>
                <tr> 
                  <td><strong>Color del texto</strong>:</td>
                  <td><select name="color" id="color">
                      <option value="#808080">Gris</option>
                      <option value="#FFFF00">Amarillo</option>
                      <option value="#008000">Verde</option>
                    </select></td>
                </tr>
                <tr> 
                  <td colspan="2"><div align="center">
                      <input name="botAceptar" type="submit" id="botAceptar" value="Aceptar">
                    </div></td>
                </tr>
              </table>
            </div>
          </form>     
          ';

        };
        */





    // Trabajado con sesiones
    session_start();

    if(isset($_SESSION['nombre']) && isset($_SESSION['color'])){


      echo "Hola " . htmlspecialchars($_SESSION['nombre']). " tu color favorito es el " . htmlspecialchars($_SESSION['color']). "";
      
      }
      
      
        else if(isset($_POST['nombre']) && isset($_POST['color'])){
      
          $_SESSION['nombre'] =  $_POST['nombre'];
          $_SESSION['color'] =  $_POST['color'];
        
        echo '<a href="practica11a.php">Continuar</a>';
      
        }
          else{
      echo '<form name="form1" method="post" action="practica11a.php">
              <div align="center">
                <table width="43%" border="0" cellpadding="4">
                  <tr> 
                    <td colspan="2">Indique los siguientes detalles:</td>
                  </tr>
                  <tr> 
                    <td width="36%"><strong>Nombre</strong>:</td>
                    <td width="64%"><input name="nombre" type="text" id="nombre"></td>
                  </tr>
                  <tr> 
                    <td><strong>Color del texto</strong>:</td>
                    <td><select name="color" id="color">
                        <option value="#808080">Gris</option>
                        <option value="#FFFF00">Amarillo</option>
                        <option value="#008000">Verde</option>
                      </select></td>
                  </tr>
                  <tr> 
                    <td colspan="2"><div align="center">
                        <input name="botAceptar" type="submit" id="botAceptar" value="Aceptar">
                      </div></td>
                  </tr>
                </table>
              </div>
            </form>     
            ';
      
          };









?>




</body>
</html>
