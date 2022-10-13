<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicionales</title>
	<style>
		body{
			font-family: Arial; 
			background: #E85F79;
		}
		div{
			background: white; 
			padding: 20px; 
			margin: 0 auto;
			width: 200px;
		}
		h1{font-size: 36px;}
	</style>
</head>
<body>
	<div>
		<?php
			$hora = 22;

			if($hora > 6 && $hora < 12){
				echo "<h1>Hola! buenos días</h1>";
			}else if($hora >= 12 && $hora <= 18){
				echo "<h1>Hola! buenas tardes</h1>";
			}else{
				echo "<h1>Hola! buenas noches</h1>";
			}

			//Estructura switch 2 ejemplos

			switch ($i) {
				case 0:
					echo "i es igual a 0";
					break;
				case 1:
					echo "i es igual a 1";
					break;
				case 2:
					echo "i es igual a 2";
					break;
			}


			switch ($i) {
				case "manzana":
					echo "i es una manzana";
					break;
				case "barra":
					echo "i es una barra";
					break;
				case "pastel":
					echo "i es un pastel";
					break;
			}
			

			
		?>
	</div>
</body>
</html>