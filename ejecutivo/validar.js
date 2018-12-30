function validar(){
			var cantidad=document.getElementById("cantidad").value;
			var tipoActividades=document.getElementById("tipoActividades").value;
			var email=document.getElementById("email").value;
			var nombreRepresentante=document.getElementById("nombreRepresentante").value;

			if (cantidad==="") {
				alert("Hay Campos vacíos");
				return false;
			} 
			else if (tipoActividades===""){
				alert("Hay Campos vacíos");
				return false;
			}
			else if (email===""){
				alert("Hay Campos vacíos");
				return false;
			}
			else if (nombreRepresentante===""){
				alert("Hay Campos vacíos");
				return false;
			}

}