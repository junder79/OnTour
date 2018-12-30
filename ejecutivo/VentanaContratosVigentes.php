<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

/*CONEXION A LA BASE DE DATOS */
include 'consulta.php';

?>
<html>
	<head>
		<title>Ejecutivo de Ventas</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilosEjecutivo.css">
		<!--REVISAR-->
		<link rel="stylesheet" type="text/css" href="css/estilosConsultaMonto.css">
		<!--REVISAR-->
		<link rel="stylesheet" type="text/css" href="css/estilosContratosVigentes-1.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
					<!--ALERTIFY-->
		<link rel="stylesheet" type="text/css" href="css/alertify.css">
		<link rel="stylesheet" type="text/css" href="css/themes/default.css">
		<script src="alertify.js"></script>
		<!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	    <!-- Compiled and minified JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	    <!--ICONOS MATERIALIZE-->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	</head>
<body>
	
	<!--SIDEBAR-->
	<div class="sidebar">
		<h2>Ejecutivo de Ventas</h2>
		<ul>
			<li><a href="../ejecutivoPrincipal.php">Inicio</a></li>
			<li><a href="VentanaNuevoContrato.php">Agregar Contrato</a></li>
			<li><a href="VentanaContratosVigentes.php">Contratos Vigentes</a></li>
			<li><a href="VentanaConsultaMonto.php">Depositos</a></li>
			<li><a href="VentanaSeguro.php">Seguros</a></li>
			<li><a target="_black" href="../reportesEjecutivo.php">Reportes</a></li>
			<li><a id="boton-salir"> &cross; Cerrar Sesión</a></li>
		</ul>
	</div>
	<div class="contenido abrir ">
		<img src="menu_icon_1.png" alt="" class="menu-bar">
		<!--CONTENIDO DE LA PAGINA-->
		<div class="containergeneral">
			<div class="form_top">
				<h1>Contratos Vigentes</h1>	
			</div>
			<!--SECTIONS-->
			<section>
				<div class="input-field col s6">
          		<input class="busqueda-input" type="text" name="busqueda" id="busqueda">
          		<label for="first_name">Ingrese Colegio</label>
        		</div>
				
			</section>

			<section id="tabla_resultado" class="tabla-resultados">
				<!--Aqui se va a desplegar la tabla de consulta-->
			</section>
		</div>

		
	</div>
	<!--IMPORTANDO ABRIR.JS -->
	<script src="abrirEjecutivo.js"></script>
	<!--IMPORTANDO LA BUSQUEDA EN VIVO "PETICION" -->
	<script src="peticion.js"></script>
		<script>
		$(document).ready(function(){
			/* IDIOMA DE ALERTTIDY */

			$("#boton-salir").click(function(){
				alertify.confirm("¿Estas Seguro que deseas Cerrar Sesión?",
					  function(){
					   location="../php/logout.php";
					  },
					  function(){
					    
					  });
			});

		});
	</script>

</body>
</html>