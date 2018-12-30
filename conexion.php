<?php
	$mysqli = new mysqli('localhost' , 'id5610097_root' , 'myapp' , 'id5610097_myapp');
	if ($mysqli->connect_error) {
		die('Error en la conexion'.$mysqli->connect_error);
	}

?>