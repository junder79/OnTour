<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet"> 
		<!--CSS LOGIN-->
		<link rel="stylesheet" type="text/css" href="apoderado/css/estilos-login-1.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
		<!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	    <!-- Compiled and minified JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	    <!--ICONOS MATERIALIZE-->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
	</head>
	<body>
		<!--CLASE DE NAVBAR-->
		<div class="navbar">
			<?php include "php/navbar.php"; ?>
		</div>
		<div class="contenido-general">
<div class="contenido login-contenido ">
<div class="formulario-general">
		<h2 class="titulo-login">INICIAR SESION</h2>
		<!--FORMULARIO-->
		<form  role="form" name="login" action="php/login-apoderado.php" method="post" class="formulario">
		 <!--INGRESO RUT-->	 
		  	<div class="input-field col s6">
	          <input type="text" class="input-usuario-login" id="username" name="username" >
	          <label>RUT</label>
        	</div>
        	<!--INGRESO CONTRASEÑA-->
        		
		  <div class="input-field col s6">
	          <input type="password" class="input-contraseña-login" id="password" name="password" >
	          <label>CONTRASEÑA</label>
        	</div>

		  <button type="submit" class="btn-acceder">Acceder</button>
		</form>
		<button type="submit" class="btn-perfil" value="Perfil" onclick = "location='tipo-usuario.html'">Perfil</button>
		
		
</div>
</div>
</div>

		<script src="js/valida_login.js"></script>
		<!--SCRIPTS ANIMACION-->
		<script src="js/boton-material.js"></script>
	</body>
</html>