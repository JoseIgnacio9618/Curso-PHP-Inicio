<?php
require_once("conexion.inc.php");
$conexion = new mysqli($servidor, $usuario, $passwd, $basedatos);
if (mysqli_connect_errno())
{
	echo "Error al establecer la conexión con la base de datos: " . mysqli_connect_error();
	exit();
}
$resultado = $conexion->query("SELECT * FROM productos");
?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
echo "<TABLE BORDER='1'>\n";
echo "<TR><TH>Identificador</TH>\n";
echo "<TH>Nombre</TH>\n";
echo "<TH>Precio</TH>\n";
echo "<TH>Descripción</TH>\n";
echo "<TH>Imagen</TH>\n";
echo "<TH>Categoría</TH></TR>\n";

while ($fila = $resultado->fetch_array())
{
	echo "<TR ALIGN='center' VALING='top'>";
	for ($columna = 0; $columna < 7; $columna++)
	{
	  switch ($columna)
	  {
	  	case 4:
		  	echo "<TD><A HREF='" . $fila[4] . "'>Pulse aquí</A></TD>\n";
			break;
		default:
			echo "<TD>$fila[$columna]</TD>\n";
		}
	}
	echo "<TR>\n"; 
}
echo "</TABLE>\n";
$resultado->close();
$conexion->close();	
?>
</body>
</html>
