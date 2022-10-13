<html>
<head>
<title>Confirmación</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
if (isset($_GET["archivo"]))
{
	$fd = fopen("usuarios/" . $_GET["archivo"], "r");
	echo "<table>";
	echo "<tr>";
	while (!feof($fd))
	{
		$fline = fgets($fd);
		$fline = htmlspecialchars($fline);
		echo "<td>$fline</td></tr>";
	}
	echo "</table>";
	fclose($fd);
}
?>
</body>
</html>
