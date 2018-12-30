
<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

/* PHP CORREO */



	if(mail('ejecutivo.ventas.ontour@gmail.com', 'COMPROBANTE DE PAGO EN LÍNEA','
----------------------------------------------------------------------------
--------------------AGENCIA ON TOUR-----------------------------------------

Estimado(a): SAMUEL VARAS 
Te informaos que hemos registrado un pago por un monto de $20.000 correspondiente al mes de MAYO.



-----------------------------DETALLES------------------------------------------------

    CÓDIGO DE TRANSACCIÓN : 8827892         
    MONTO : $ 20. 000 ( VEINTE MIL PESOS CHILENOS)
    HORA: 11:20 A.M

            

		')){
		echo "";
	}else{
		echo "ALGO SALIO MAL UPS";
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/loading.css">
		<!--ALERTIFY-->
		<link rel="stylesheet" type="text/css" href="../css/alertify.css">
		<link rel="stylesheet" type="text/css" href="../css/themes/default.css">
	
</head>
<body>
	<div class="loader"></div>
	<div class="container">
		<h1>Pago efectuado exitosamente</h1>
		<img  class="success" src="img/success.png"> <br>
		<label class="label-info">Codigo Transación: HNA8790913092</label> <br>
		<label class="label-info">Comercio : OnTour &copy;</label> <br>
		<label class="label-info">Monto declarado :  $20.000</label> <br>
		<label class="label-info">Veinte Mil Pesos.</label> <br>
		<label class="label-info">Emisor : Banco Estado</label> <br>
		<input class="btn-aceptar" type="submit" name="aceptar" value="aceptar" onclick = "location='../VentanaOnTourPay.php'">
	</div>
</body>
<script src="../alertify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!--VENTANA EMERGENTE DE CONFIRMACION ALETIFY -->
	<script>
		$(document).ready(function(){
				 alertify.success('Pago Efectuado');

		});
	</script>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
</html>