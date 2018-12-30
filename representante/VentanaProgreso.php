<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>Representante de Curso</title>
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilosProgreso.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/estilosGeneral.css">
		<!--JQUERY-->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	    <!-- Compiled and minified JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    		    		<!--ALERTIFY-->
		<link rel="stylesheet" type="text/css" href="css/alertify.css">
		<link rel="stylesheet" type="text/css" href="css/themes/default.css">
		<script src="alertify.js"></script>
		<script src="code/highcharts.js"></script>
		<script src="code/modules/exporting.js"></script>
		<script src="code/modules/export-data.js"></script>


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
		<div class="contenido-inicio main">
			<div class="col s12">
    					<span class="progreso-actual black-text ">PROGRESO ACTUAL</span>
  					</div>
			<div class="box ">
				<div class="chart" data-percent="50" data-scale-color="#ffb400">50%</div>
			</div>
			<div class="row">

				<div class="col s6">
					<div class="card-panel #1976d2 blue darken-2">
    					<span class="meta white-text ">META</span>
  					</div>
  					<div class="card-panel #1976d2 blue darken-2">
    					<span class="progreso white-text "> $500.000 / $1.000.000</span>
  					</div>
  					<div class="card-panel #1976d2 blue darken-2">
  						 <!-- Modal Trigger -->
  						<a class="waves-effect waves-light btn-large modal-trigger" href="#modal1"><i class="material-icons right">equalizer</i>PROGRESO POR ALUMNOS</a>
  					</div>
  					
				</div>
			</div>

				 
				  
				  <!-- Modal Structure -->
				  <div id="modal1" class="modal">
				    <div class="modal-content">
				      <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
				      
				    </div>
				    <div class="modal-footer">
				      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
				    </div>
				  </div>
				 </div>
	</div>

	<!--IMPORTANDO ABRIR.JS -->
	<script src="abrir.js"></script>
	<!--IMPORTANDO EASYPIECHARST JS -->
	<script src="barraProgreso/jquery.easypiechart.js"></script>
	<script>
    $(function() {
        $('.chart').easyPieChart({
            size:350,
            barColor:'#17d3e6',
            scaleColor:false,
            lineWidth: 15,
            trackColor:'#373737',
            lineCap:'circle',
            animate:3000
        });
    });
</script>
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
<script>
		  $(document).ready(function(){
    $('.modal').modal();
  });
        
	</script>

	<!--BARRA-->
<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Progreso de Alumnos'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Samuel',
            y: 13.00,
            sliced: true,
            selected: true
        }, {
            name: 'Juan',
            y: 34.00
        }, {
            name: 'John',
            y: 10.85
        }, {
            name: 'Brayan',
            y: 4.67
        }, {
            name: 'Isidora',
            y: 4.18
        }, {
            name: 'Manta',
            y: 1.64
        }, {
            name: 'Mayte',
            y: 20.6
        }, {
            name: 'Denisse',
            y: 9.2
        }, {
            name: 'Raúl',
            y: 4.61
        }]
    }]
});
		</script>

</body>
</html>