<?php
require_once("conexion.inc.php");
$conexion = new mysqli($servidor, $usuario, $passwd, $basedatos);
if (mysqli_connect_errno())
{
	echo "Error al establecer la conexión con la base de datos: " . mysqli_connect_error();
	exit();
}
if (isset($_GET["orden"]))
	$orden = $_GET["orden"];
else
	$orden = "IdProducto";
$resultado = $conexion->query("SELECT COUNT(*) as Total FROM productos");
$fila = $resultado->fetch_array();
$num_total = $fila["Total"];
$num_filas = 5;
if (isset($_GET["desplazamiento"]))
	$desplazamiento = $_GET["desplazamiento"];
else
	$desplazamiento = 0;
$resultado = $conexion->query("SELECT * FROM productos ORDER BY $orden LIMIT $desplazamiento, $num_filas");
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
echo "<TR><TH><A HREF='" . $_SERVER['PHP_SELF'] . "?orden=IdProducto'>Identificador</A></TH>\n";
echo "<TH><A HREF='" . $_SERVER['PHP_SELF'] . "?orden=Nombre'>Nombre</A></TH>\n";
echo "<TH><A HREF='" . $_SERVER['PHP_SELF'] . "?orden=Precio'>Precio</A></TH>\n";
echo "<TH><A HREF='" . $_SERVER['PHP_SELF'] . "?orden=Descripcion'>Descripción</A></TH>\n";
echo "<TH><A HREF='" . $_SERVER['PHP_SELF'] . "?orden=ImageURL'>Imagen</A></TH>\n";
echo "<TH><A HREF='" . $_SERVER['PHP_SELF'] . "?orden=IdCategoria'>Categoría</A></TH></TR>\n";

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
if ($desplazamiento > 0)
{
	$prev = $desplazamiento - $num_filas;
	$url = $_SERVER["PHP_SELF"] . "?orden=$orden&desplazamiento=$prev";
	echo "<A HREF='$url'>Página anterior</A>";
	echo "&nbsp;&nbsp;&nbsp;";
}
if ($num_total > ($desplazamiento + $num_filas))
{
	$prox = $desplazamiento + $num_filas;
	$url = $_SERVER["PHP_SELF"] . "?orden=$orden&desplazamiento=$prox";
	echo "<A HREF='$url'>Próxima página</A>";
}
$resultado->close();
$conexion->close();	
?>
</body>
</html>
