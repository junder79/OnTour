<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>Ejecutivo de Ventas</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilosEjecutivo.css">
		<link rel="stylesheet" type="text/css" href="css/estilosNuevoContrato-1.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script> 
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
			<li><a href="../php/logout.php"> &cross; Cerrar Sesion</a></li>
		</ul>
	</div>
	<div class="contenido abrir ">
		<img src="menu_icon_1.png" alt="" class="menu-bar">
		<!--CONTENIDO DE LA PAGINA-->
		<div class="container">
			<div class="form_top">
				<h1>Crear nuevo <span>Contrato</span></h1>
			</div>
			
		<div class="row">
			<div class="col s12">
				<form action="registrarContrato.php" method="post" class="form_reg" onsubmit="return validar();" >
					<div class="input-field">
						<!--COLEGIO-->
						<div class="input-field col s6">
				        <select name="colegio" class="colegio_input">
							<option value="" disabled selected>Colegio : </option>
				  			<option value="COLEGIO NEWTON COLLEGE">COLEGIO NEWTON COLLEGE</option>
				  			<option value="SAN SILVESTRE SCHOOL">SAN SILVESTRE SCHOOL</option>
				  			<option value="CAMBRIDGE COLLEGE LIMA">CAMBRIDGE COLLEGE LIMA</option>
				  			<option value="COLEGIO ANTONIO RAIMONDI">COLEGIO ANTONIO RAIMONDI</option>
				  			<option value="COLEGIO Santa María Marianistas">COLEGIO Santa María Marianistas</option>
				  			<option value="COLEGIO San José">COLEGIO San José</option>
				  			<option value="COLEGIO Peruano Británico">COLEGIO Peruano Británico</option>
				  			<option value="COLEGIO José Antonio Encinas">COLEGIO José Antonio Encinas</option>
				  			<option value="COLEGIO Santa Úrsula">COLEGIO Santa Úrsula</option>
						</select>
		        		</div>	
					<!--curso-->
					<div class="input-field col s6">
			         <select name="curso" class="curso_input">
						<option value="" disabled selected>Curso : </option>
			  			<option value="Cuarto Básico">Cuarto Básico</option>
			  			<option value="Quinto Básico">Quinto Básico</option>
			  			<option value="Sexto Básico">Sexto Básico</option>
			  			<option value="Séptimo Básico">Séptimo Básico</option>
			  			<option value="Octvo Básico">Octvo Básico</option>
			  			<option value="Primero Medio">Primero Medio</option>
			  			<option value="Segundo Medio">Segundo Medio</option>
			  			<option value="Tercero Medio">Tercero Medio</option>
			  			<option value="Cuarto Medio">Cuarto Medio</option>
					</select>
		        	</div>		
						
					<!--destino-->
					<div class="input-field col s6">
			          <select name="destino" class="destino_input">
							<option value="" disabled selected>Destino : </option>
				  			<option value="Isla de Pascua">Isla de Pascua</option>
				  			<option value="Chillán">Chillán</option>
				  			<option value="La Serena">La Serena</option>
						</select> 
		        	</div>		
					
					<!--fecha de viaje-->
					<div class="input-field col s6">
			          <input type="text" name="fecha"  class="datepicker">
			          <label for=>Fecha de Viaje</label>
		        	</div>

					<!--Cantidad de Alumnos-->
					<div class="input-field col s6">
			          <input type="number" id="cantidad" name="numeroAlumnos" class="numero_input" min="0" max="100">
			          <label for=>Cantidad de Personas</label>
		        	</div>
					<!--Servicios Contratados-->
					<div class="input-field col s6">
						<select name="ServiciosContratados" class="servicios_input">
							<option value="" disabled selected>Servicios Contratados : </option>
				  			<option value="Seguro de cancelación de viajes">Seguro de cancelación de viajes</option>
				  			<option value="Seguro de cobertura por pérdida de equipaje">Seguro de cobertura por pérdida de equipaje</option>
				  			<option value="Asistencia médica de emergencia" class="input-48">Asistencia médica de emergencia</option>
				  			<option value="Seguro por muerte accidental" class="input-48">Seguro por muerte accidental</option>
						</select>
		        	</div>
					
					<!--Tipo de Actividades-->
					<div class="input-field col s4 ">
			          <input type="text" id="tipoActividades" name="tipoActividades" class="tipo_input ">	
			          <label for=>Tipo de Actividades</label>
		        	</div>

					
					<!--CORREO-->
					<div class="input-field col s4">
			          <input type="email" id="email" name="correo" class="correo_input">
			          <label for=>Correo</label>
		        	</div>

					<!--CORREO-->
					<div class="input-field col s4">
			          <input type="text" id="nombreRepresentante" name="nombre_representante" class="nombre_representante-input"> 
			          <label for=>Nombre Representante</label>
		        	</div>
						
					</div>
					<!--BOTONES-->
					<div class="btn_form">
				<input  id="registro_exito" onsubmit="return validar();" class="btn_submit" type="submit" name="Registrar"  value="Agregar Contrato">
				<input class="btn_submit" type="reset" name="Limpiar" value="Limpiar">
			</div>
				</form>
			</div>
		</div>
		</div>

		
	</div>
	<script>
           $(document).ready(function(){
    $('select').formSelect();
    $('.datepicker').datepicker();

  });
        
      </script>
	<!--IMPORTANDO ABRIR.JS -->
	<script src="../js/boton-material.js"></script>
	<script src="abrirEjecutivo.js"></script>
	<script> 
	function validar(){
			var cantidad=document.getElementById("cantidad").value;
			var tipoActividades=document.getElementById("tipoActividades").value;
			var email=document.getElementById("email").value;
			var nombreRepresentante=document.getElementById("nombreRepresentante").value;

			if (cantidad==="" || tipoActividades==="" || email==="" || nombreRepresentante==="" ) {
				
				$(document).ready(function(e){
			$("#registro_exito").click(function(e){
				sweetAlert("Error","Hay campos vacios","error");
			})
		})
				return false;
			} else {
				alert("Contrato registrado exitosamente")
				

			}
			
}
	</script>


</body>
</html>