<?php
/* Conexion a la base de datos */
$host='localhost';
$basededatos='id5610097_myapp';
$usuario='id5610097_root';
$contraseña='myapp';

$conexion= new mysqli($host,$usuario,$contraseña,$basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion :(".$conexion -> mysqli_connect_errno().")".$conexion -> mysqli_connect_error());	
}


/* Valores Iniciales */

/* En la variable tabla , se guardara lo que estamos consultando , es decir , lo que estoy colocando en el input */
$tabla="";
$query=" SELECT * FROM CONTRATO ORDER BY COLEGIO";

/* Lo que ocurre al teclear sobre el input de busqueda */
 if (isset($_POST['contrato']))
 {
 	/* Q , LA VARIABLE DE LA QUERY CAMBIA AL INGRESAR TEXTO EN EL INPUT*/
 	$q=$conexion->real_escape_string($_POST['contrato']);
 	$query="SELECT * FROM CONTRATO WHERE 
 	COLEGIO LIKE '%".$q."%'";	
 }

 $buscarContrato=$conexion->query($query);
 if ($buscarContrato -> num_rows>0) 
 {
 	$tabla.=
 	'<table class="tabla">
 		<tr>
 			<td>COLEGIO</td>
 			<td>CURSO</td>
 			<td>DESTINO</td>
 			<td>FECHA DE VIAJE</td>
 			<td>NUMERO ALUMNOS</td>
 			<td>SERVICIOS CONTRATADOS</td>
 			<td>TIPO_ACTIVIDADES</td>
 			<td>CORREO</td>
 			<td>NOMBRE REPRESENTANTE</td>
 			<td>EDITAR</td>
 			<td>ELIMINAR</td>
 		</tr>';

 		while ($filaContrato=$buscarContrato -> fetch_assoc()) 
 		{
 			$tabla.=
 			'<tr>
 				<td>'.$filaContrato['colegio'].'</td>
							<td>'.$filaContrato['curso'].'</td>
							<td>'.$filaContrato['destino'].'</td>
							<td>'.$filaContrato['fecha_viaje'].'</td>
							<td>'.$filaContrato['numero_alumnos'].'</td>
							<td>'.$filaContrato['servicio_contratado'].'</td>
							<td>'.$filaContrato['tipo_actividades'].'</td>
							<td>'.$filaContrato['correo'].'</td>
							<td>'.$filaContrato['nombre_representante'].'</td>
							<td> <button class="btn_editar"  name="btn-editar">Editar</button></td>
							<td> <button class="btn_eliminar"  name="btn_eliminar">Eliminar</button></td>

 			</tr>';
 		}
 		$tabla.='</tabla>';
 } else 
 {
 	$tabla="Los datos ingresados no existen en nuestra base de datos.";
 }

 echo $tabla;

 ?>