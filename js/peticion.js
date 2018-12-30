/* Abreviada document.*/
$(obtener_registros());
/* Funcion */
function obtener_registros(contrato)
{
	$.ajax({
		url:'consulta.php',
		type: 'POST', /* POST*/
		dataType:'html', /* Tipo de fichero */
		data: {contrato:contrato},	/* datos a usa o procesar */

	})
	/* en esta section se va insertar , el resultado de la funcion */
	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}
/* Procesar lo que esta o lo que no esta en la caja de INPUT*/

$(document).on('keyup' , '#busqueda', function()
{
	/* se va a obtener lo que escribi en el input y se guardara en la variable */
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="") 
	{
		obtener_registros(valorBusqueda);
	}
	else {
		obtener_registros();
	}
});