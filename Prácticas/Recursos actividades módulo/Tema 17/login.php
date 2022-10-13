<?php
$primeravez = FALSE;
if (empty($_POST["botEnviar"]))
{
	$primeravez = TRUE;
	$_POST["email"] = "";
	$_POST["password"] = "";
}
?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>
<link href="estilo.css" rel="stylesheet" type="text/css">
<body background="images/Fondo.jpg">
<div id="Layer1" style="position:absolute; width:185px; height:24px; z-index:1; left: 23px; top: 1px;"> 
  <p class="titulo"><font color="#0000FF" size="+1" face="Comic Sans MS">tiendaDETALLES.com</font><strong> 
    </strong></p>
</div>
<div id="Layer2" style="position:absolute; left:91px; top:42px; width:365px; height:197px; z-index:2"> 
  <p><strong>DETALLES DE SU CUENTA</strong></p>
  <p>Para acceder a su cuenta de usuario, debe identificarse.</p>
  <form name="form1" method="post" action="">
    <table width="100%" border="0" cellpadding="4">
      <tr> 
        <td width="25%" class="camporegistro">Email *:</td>
        <td width="75%"><input name="email" type="text" id="email" value="<?php echo $_POST['email']; ?>"> 
        </td>
      </tr>
      <?php 
	  		if (!$primeravez)
			  if (empty($_POST["email"]))
	  			echo "<tr><td></td><td class='error'>¡Tiene que introducir su email!</td></tr>";
			  elseif (!preg_match("/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/", $_POST["email"]))
			  	echo "<tr><td></td><td class='error'>¡Email no válido!</td></tr>";
			  else
			  	$email = htmlspecialchars($_POST["email"]);	
	  ?>
      <tr> 
        <td class="camporegistro">Password *:</td>
        <td><input name="password" type="password" id="password""> </td>
      </tr>
      <tr>
        <td class="camporegistro">&nbsp;</td>
        <td><a href="registro.php">Si es un nuevo usuario, regístrese aquí.</a></td>
      </tr>
      <?php 
	  	if (empty($_POST["password"]) && (!$primeravez))
	  			echo "<tr><td></td><td class='error'>¡Tiene que introducir su password!</td></tr>";
		else
			$password = htmlspecialchars($_POST["password"]);
       if ((!$primeravez) && isset($email) && isset($password))
	   {
		// Completar el código de la práctica aquí
	   }
	  ?>
    </table>
    <p align="center"> 
      <input name="botEnviar" type="submit" id="botEnviar" value="Enviar">
    </p>
    </form>
</div>
</body>
</html>