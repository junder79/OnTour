<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Ups! , RUT o CONTRASEÑA incorrecta\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>Apoderado</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/estilosGeneral.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<!-- Compiled and minified CSS -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    	<!-- Compiled and minified JavaScript -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--ALERTIFY-->
    <link rel="stylesheet" type="text/css" href="css/alertify.css">
    <link rel="stylesheet" type="text/css" href="css/themes/default.css">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="alertify.js"></script> 


	</head>
<body>

	<!--SIDEBAR-->
	<div class="sidebar">
		<h2>Apoderado</h2>
		<ul>
			<li><a href="apoderadoPrincipal.php">Inicio</a></li>
      <li><a href="VentanaProgreso.php">Progreso</a></li>
			<li><a href="VentanaPoliza.php">Póliza</a></li>
			<li><a href="reportes/contrato.pdf" target="_blank">Contrato</a></li>
			<li><a id="boton-salir"> &cross; Cerrar Sesión</a></li>
		</ul>
	</div>
	<div class="contenido abrir">
		<img src="../menu_icon_1.png" alt="" class="menu-bar">
		<!--CONTENIDO DE LA PAGINA-->
		<div class="contenido-inicio">
			<h1 class="titulo-contenido">Póliza de Seguro</h1>
			
			    <div class="row">
    <div class="col s4 m6">
      <div class="card">
        <div class="card-image">
          <img src="img/cancelacion-seguro-new.jpg">
          <span class="card-title">Cancelación de Viajes</span>
          <a href="seguros.pdf" target="_blank" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">arrow_downward</i></a>
        </div>
        <div class="card-content">
          <p>Este seguro le reembolsará el dinero pagado si el operador del crucero o de su gira (tour) se declara en bancarrota.</p>
        </div>
      </div>
    </div>
     <div class="col s4 m6">
      <div class="card">
        <div class="card-image">
          <img src="img/perdida-seguro.jpg">
          <span class="card-title">Cobertura Pérdidad de equipaje</span>
          <a href="seguros.pdf" target="_blank" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">arrow_downward</i></a>
        </div>
        <div class="card-content">
          <p>Esta cobertura le reembolsará por las pérdidas, robo o daños sufridos al equipaje y a sus pertenencias personales durante el viaje.</p>
        </div>
      </div>
    </div>
    <div class="col s4 m6">
      <div class="card">
        <div class="card-image">
          <img src="img/asistencia-seguro.png">
          <span class="card-title">Asistencia médica de emergencia</span>
          <a href="seguros.pdf" target="_blank" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">arrow_downward</i></a>
        </div>
        <div class="card-content">
          <p>Este provee de seguro y asistencia médica para viajeros. Da cobertura a los viajeros que se enfermen o resulten lesionados durante el viaje.</p>
        </div>
      </div>
    </div>
    <div class="col s4 m6">
      <div class="card">
        <div class="card-image">
          <img src="img/muerte-seguro.png">
          <span class="card-title">Seguro por muerte accidental</span>
          <a href="seguros.pdf" target="_blank" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">arrow_downward</i></a>
        </div>
        <div class="card-content">
          <p>Este seguro provee de una variedad de indemnizaciones en caso de que usted o un familiar que viaje con usted muera en el viaje.</p>
        </div>
      </div>
    </div>
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
             location="../php/logout-apoderado.php";
            },
            function(){
              
            });
      });

    });
  </script>

</body>
</html>