<html>
<head>
<title>Calendario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p>Averig&uuml;amos el d&iacute;a de la semana en que naci&oacute;...</p>
<?php
if (empty($_POST["botEnviar"]))
{
?>
<form name="form1" method="post" action="">
  <p align="left"><strong>Fecha de nacimiento</strong>:</p>
  <p align="left">D&iacute;a: 
    <select name="dia" id="dia">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    Mes: 
    <select name="mes" id="mes">
      <option value="1">Enero</option>
      <option value="2">Febrero</option>
      <option value="3">Marzo</option>
      <option value="4">Abril</option>
      <option value="5">Mayo</option>
      <option value="6">Junio</option>
      <option value="7">Julio</option>
      <option value="8">Agosto</option>
      <option value="9">Septiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
    </select>
    A&ntilde;o: 
    <select name="anyo" id="anyo">
	<?php
		for ($i = 1971; $i <= 2005; $i++)
		{
			echo "<option value=\"$i\">$i</option>";
		}
	?>
    </select>
    <input name="botEnviar" type="submit" id="botEnviar" value="Enviar">
  </p>
  </form>
<?php
}
else
{
	try
	{
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$anyo = $_POST["anyo"];
		if (!checkdate($mes, $dia, $anyo))
			throw new Exception("La fecha no es válida.");
		else
		{
			$nacimiento = getdate(mktime(0, 0, 0, $mes, $dia, $anyo));
			$diasemana = $nacimiento["weekday"];
			switch ($diasemana)
			{
				case "Monday":
					$diasemana = "lunes";
					break;
				case "Tuesday":
					$diasemana = "martes";
					break;
				case "Wednesday":
					$diasemana = "miércoles";
					break;
				case "Thursday":
					$diasemana = "jueves";
					break;
				case "Friday":
					$diasemana = "viernes";
					break;
				case "Saturday":
					$diasemana = "sábado";
					break;
				case "Sunday":
					$diasemana = "domingo";
					break;
			}
			echo "Usted nació un <b>" . $diasemana . "</b>.";
		}
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}
?>
</body>
</html>
