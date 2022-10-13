<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="boton.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="estilos.css">
	
</head>
<body>
	<div id="menu">
		<ul>
			<li><a href="#" id="botonIniciar" class="active">Iniciar Sesión</a></li>
			<li><a href="#" id="botonRegistro" class="active">Registrar Cuenta</a></li>
		</ul>
	</div>
	<div id="formularioInicio">
		<!-- Con el atributo action seleccionamos que codigo php queremos que se ejecute 
		cuando el usuario envie el formulario y con el atributo method elegimos si se envian por url
		o por peticion-->
		<form action="Iniciar sesion.php" id="form_inicio" method="post">

			<p>Correo electrónico:</p>
			<div class="field-container">
				<i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>	
				<input name="usuario" type="text" class="field" placeholder="user@example.com"> <br/>
			</div>

			<p>Contraseña:</p>
			<div class="field-container">
				<i class="fa fa-key fa-lg" aria-hidden="true"></i>	
				<input name="password" type="password" class="field" placeholder="*******"> <br/>
			</div>
			<p class="center-content">
				<input type="submit" class="btn btn-green" value="Iniciar sesión"> <br/><br/>
				<!-- Asi se mandan datos a traves de la url, primero se pone el php luego ? 
				y a continuacion los datos a enviar  -->	
			</p>
		</form>	

	

	</div>
	<div id="formularioRegistro" >
		<!-- Con el atributo action seleccionamos que codigo php queremos que se ejecute 
		cuando el usuario envie el formulario y con el atributo method elegimos si se envian por url
		o por peticion-->
		<form action="Registrar usuario.php" id="form_registro" method="post">

			<p>Correo electrónico:</p>
			<div class="field-container">
				
				<input name="correo" type="email" class="field" placeholder="user@example.com" required> <br/>
			</div>

			<p>Nombre completo:</p>
			<div class="field-container">
					
				<input name="nombre" type="text" class="field" placeholder="Pon tu nombre" required> <br/>
			</div>

			<p>Contraseña:</p>
			<div class="field-container">
					
				<input name="passwordRegistro" type="password" class="field" placeholder="*******" required> <br/>
			</div>

			<p>Repetir Contraseña:</p>
			<div class="field-container">
					
				<input name="passwordRegistro2" type="password" class="field" placeholder="*******" required> <br/>
			</div>


			<p class="center-content">
				<input type="submit" class="btn btn-green" value="Registrar"> <br/><br/>
				<!-- Asi se mandan datos a traves de la url, primero se pone el php luego ? 
				y a continuacion los datos a enviar  -->	
			</p>
		</form>	

	

	</div>

	<script src="scriptmenu.js"></script>

</body>
</html>


