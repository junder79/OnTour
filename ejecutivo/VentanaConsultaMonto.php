<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

/*CONEXION A LA BASE DE DATOS */

$host ="localhost";
$usuario="id5610097_root";
$contraseña="myapp";
$base="id5610097_myapp";
$conexion=new mysqli($host,$usuario,$contraseña,$base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion :(".$conexion -> mysqli_connect_errno().")".$conexion -> mysqli_connect_error());	
}

/* CONSULTA A LA BASE DE DATOS */

$contrato = "SELECT colegio , curso , destino , fecha_viaje , numero_alumnos , servicio_contratado , tipo_actividades  FROM CONTRATO";
$resContrato=$conexion->query($contrato);


?>
<html>
	<head>
		<title>Ejecutivo de Ventas</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilosEjecutivo.css">
		<link rel="stylesheet" type="text/css" href="css/estilosConsultaMonto.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	    <!-- Compiled and minified JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	    				<!--ALERTIFY-->
		<link rel="stylesheet" type="text/css" href="css/alertify.css">
		<link rel="stylesheet" type="text/css" href="css/themes/default.css">

		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="alertify.js"></script>
	  	<!-- jQuery Modal -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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
			<li><a id="boton-salir" href="../php/logout.php"> &cross; Cerrar Sesión</a></li>
		</ul>
	</div>
	<div class="contenido abrir ">
		<img src="menu_icon_1.png" alt="" class="menu-bar">
		<!--CONTENIDO DE LA PAGINA-->
		<div class="containergeneral">
			<div class="form_top">
				<h1>Consulta Montos</h1>	
			</div>

			<section>
			
			<table class="tabla">
				<tr>
					<th>COLEGIO</th>
					<th>CURSO</th>
					<th>DESTINO</th>
					<th>FECHA DE VIAJE</th>
					<th>NUMERO DE ALUMNOS</th>
					<th>SERVICIOS CONTRATADOS</th>
					<th>TIPO DE ACTIVIDADES</th>
					<th>ULTIMOS MOVIMIENTOS</th>
				</tr>
				<?php
				/* Mientras esten dando resultados (registros) de la query */

				while ($resgistroContrato=$resContrato->fetch_array(MYSQLI_BOTH)) 
				{
					echo '<tr>
							<td>'.$resgistroContrato['colegio'].'</td>
							<td>'.$resgistroContrato['curso'].'</td>
							<td>'.$resgistroContrato['destino'].'</td>
							<td>'.$resgistroContrato['fecha_viaje'].'</td>
							<td>'.$resgistroContrato['numero_alumnos'].'</td>
							<td>'.$resgistroContrato['servicio_contratado'].'</td>
							<td>'.$resgistroContrato['tipo_actividades'].'</td>
							<td><button  id="btn" class="btn waves-effect waves-light">Movimientos
								    <i class="material-icons right">send</i>
								  </button>
								<div style="display:none" id="modal">
								<table>
									<thead>
								          <tr>
								              <th>Fecha</th>
								              <th>N° Operacion</th>
								              <th>Descripción</th>
								              <th>Monto</th>
								          </tr>
       								 </thead>
								        <tbody>
								          <tr>
								            <td>21/04/2018</td>
								            <td>99879</td>
								            <td>Transferencia</td>
								            <td>$40.000</td>
								          </tr>
								          <tr>
								            <td>23/04/2018</td>
								            <td>77167</td>
								            <td>Transferencia</td>
								            <td>$120.000</td>
								          </tr>
								          <tr>
								            <td>01/05/2018</td>
								            <td>99021</td>
								            <td>Transferencia</td>
								            <td>$320.000</td>
								          </tr>
								        </tbody>
								      </table></td>
							</tr>';
				}

				?>
			</table>
			</section>
			
		
		</div>

		
	</div>
	<script>

	</script>
	<!--IMPORTANDO ABRIR.JS -->
	<script src="abrirEjecutivo.js"></script>
	<!--JSQUERY BUSQUEDA-->
	<script src="main.js"></script>
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
	<!--MODAL JQUERY-->
	<script >
		$('#btn').click(function(){
			$('#modal').modal();
		});
	</script>

</body>
</html>