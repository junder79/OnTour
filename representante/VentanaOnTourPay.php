<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>Representante de Curso</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/estilosGeneral.css">
		<link rel="stylesheet" type="text/css" href="css/estilosOnTourPay.css">

			<!--ALERTIFY-->
		<link rel="stylesheet" type="text/css" href="css/alertify.css">
		<link rel="stylesheet" type="text/css" href="css/themes/default.css">

		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="alertify.js"></script>


	</head>
<body>

	<!--SIDEBAR-->
	<div class="sidebar">
		<h2>Representante de Curso</h2>
		<ul>
			<li><a href="RepresentantePrincipal.php">Inicio</a></li>
			<li><a href="VentanaOnTourPay.php">Efectuar Pago</a></li>
			<li><a href="VentanaProgreso.php">Progreso</a></li>
			<li><a id="boton-salir"> &cross; Cerrar Sesión</a></li>
		</ul>
	</div>
	<div class="contenido abrir">
		<img src="../menu_icon_1.png" alt="" class="menu-bar">
		<!--CONTENIDO DE LA PAGINA-->
		<div class="container">
			<div class="form_top">
				<h1> Efectuar Pago</h1>
			</div>
			<div class="contenido-logo-pay">
				<img class="logo-pay" src="img/logo-pay-oficial.png">
				<label class="label-pay">PAY</label>
				<div class="contenido-acceder">
					<label class="comercio">Comercio : AGENCIA ON-TOUR&copy;</label> <br> <br> <br> <br> <br>
					<label class="curso">Curso :</label>
					<select name="Curso" class="Colegio">
			  			<option value="Cuarto Básico">Cuarto Básico</option>
			  			<option value="Quinto Básico">Quinto Básico</option>
			  			<option value="Sexto Básico">Sexto Básico</option>
			  			<option value="Séptimo Básico">Séptimo Básico</option>
			  			<option value="Octvo Básico">Octvo Básico</option>
			  			<option value="Primero Medio">Primero Medio</option>
			  			<option value="Segundo Medio">Segundo Medio</option>
			  			<option value="Tercero Medio">Tercero Medio</option>
			  			<option value="Cuarto Medio">Cuarto Medio</option>
					</select> <br>

				
					<button class="boton-aceptar"  id="boton-aceptar" type="submit" >Aceptar</button>
				</div>
			</div>
		</div>
	</div>

	<!--IMPORTANDO ABRIR.JS -->
	<script src="abrir.js"></script>
	<!--VENTANA EMERGENTE DE CONFIRMACION ALETIFY -->
	<script>
		$(document).ready(function(){
			/* IDIOMA DE ALERTTIDY */

			$("#boton-aceptar").click(function(){
				alertify.confirm("Usted sera enviado al sistema de pago OnTour.¿Desea Continuar?",
					  function(){
					    location="ontourpay/ontourpay.php";
					  },
					  function(){
					    alertify.error('Operación Cancelada');
					  });
			});

			$("#boton-salir").click(function(){
				alertify.confirm("¿Estas Seguro que deseas Cerrar Sesión?",
					  function(){
					   location="../php/logout-representante.php";
					  },
					  function(){
					    
					  });
			});

		});
	</script>
</body>
</html>