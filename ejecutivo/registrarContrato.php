<?php
require 'ventanaNuevoContrato.php';
$server="localhost";
$user ="root";
$pass="";
$database="myapp";


/* CONEXION A LA BASE DE DATOS */
$con=mysqli_connect($server,$user,$pass);
mysqli_select_db($con,$database) or die ("Error al conectar a la base de datos ");

//Recibir los datos del formulario y almacenarlos en una variable 
$colegio=$_POST['colegio'];
$curso = $_POST['curso'];
$destino = $_POST['destino'];
$fecha =$_POST['fecha'];
$numeroAlumnos=$_POST['numeroAlumnos'];
$serviciosContratados = $_POST['ServiciosContratados'];
$tipoActividades = $_POST['tipoActividades'];
$correo = $_POST['correo'];
$nombreRepresentante=$_POST['nombre_representante'];

//Insertar los datos 

$insertar = "INSERT INTO contrato (colegio,curso , destino , fecha_viaje , numero_alumnos , servicio_contratado , tipo_actividades , correo,nombre_representante) VALUES ('$colegio','$curso','$destino','$fecha','$numeroAlumnos','$serviciosContratados','$tipoActividades','$correo','$nombreRepresentante')";

/* EJECUTAR LA INSERCCION */

$resultado =mysqli_query($con,$insertar);

if (!$resultado) {
	echo "Error al insertar los datos ";
} else 
{	/* REGRESANDO AL HOME */
	
	echo "Registro Exitoso <br> <a href='../ejecutivoPrincipal.php''>Volver</a>";
}

//Cierre de la conexion

mysqli_close($con);

?>