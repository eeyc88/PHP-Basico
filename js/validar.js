function validar() {
	var nombre, correo , clave, usuario, telefono, expresion, mensaje;
	nombre = document.getElementById("nombre").value;
	correo = document.getElementById("correo").value;
	clave = document.getElementById("clave").value;
	usuario = document.getElementById("usuario").value;
	telefono = document.getElementById("telefono").value;



	expresion= /\w+@\w+\.+[a-z]/ ;	

	if (nombre== ""||correo == "" ||clave== ""||usuario == "" ||telefono == ""||mensaje == "") {
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if(nombre.length>30){
		alert("El nombre tiene demasiados caracteres");
		return false;
		
	}
	else if(correo.length>100){
		alert("El correo tiene demasiados caracteres");
		return false;
		
	}
	else if(!expresion.test(correo)){
		alert("EL correo no es valido");
		return false;
		
	}

	else if(clave.length>20){
		alert("La clave tiene demasiados caracteres");
		return false;
		
	}

}
