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
			    		<!--ALERTIFY-->
		<link rel="stylesheet" type="text/css" href="css/alertify.css">
		<link rel="stylesheet" type="text/css" href="css/themes/default.css">

		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="alertify.js"></script>
		<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

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
	<div class="contenido">
		<img src="../menu_icon_1.png" alt="" class="menu-bar">
		<!--CONTENIDO DE LA PAGINA-->
		<div class="contenido-inicio">
			<h1 class="titulo-contenido">Bienvenido</h1>
	<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>

		</div>
	</div>

	<!--IMPORTANDO ABRIR.JS -->
	<script src="abrir.js"></script>
			<script>
		$(document).ready(function(){
			/* IDIOMA DE ALERTTIDY */

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
	<script >
		$(document).ready(function(){
    $('.carousel').carousel();

  });
	</script>
</body>
</html>