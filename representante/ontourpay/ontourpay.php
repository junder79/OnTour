<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>On Tour Pay</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
</head>
<body>

	<div class="container">
		<h1>On Tour Pay</h1>
		<form class="formulario-pago" method="POST" action="pago.php">
			<label class="comercio">Comercio :Angencia Ontour &copy;</label> <br>
			<label class="banco">Banco :</label>
				<select name="banco" class="banco-combobox">
			  			<option value="">BANCO ESTADO</option>
			  			<option value="">BANCO DE CHILE</option>
			  			<option value="">SCOTIABANK</option>
			  			<option value="">BANCO BCI</option>
			  			<option value="">BANCO ITAÚ</option>
				</select> <br>
			<label class="rut">Rut :</label>
			<input class="rut-input" type="text" name="rut" placeholder="RUT"> <br>
			<label class="contraseña">Contraseña :</label>
			<input class="contraseña-input" type="password" name="contraseña"> <br>
			<label class="monto">Monto : $</label>
			<input class="monto-input" type="number" name="number"> <br>
			<label class="correo">Correo :</label>
			<input class="correo-input" type="email" name="correo"> <br>
			
			<input class="btn-pagar" type="submit" name="pagar" value="Pagar" >
		</form>
		<input class="btn-anular" type="submit" name="anular" value="Anular" onclick = "location='../VentanaOnTourPay.php'">
		<div class="footer">
			<img src="img/wepbay.png" width="300" height="100"  >
		</div>
	</div>
	
</body>

</html>