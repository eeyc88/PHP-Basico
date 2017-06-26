function validarContac() {
	var nombre, correo , telefono, expresion, mensaje;
	nombre = document.getElementById("nombre").value;
	correo = document.getElementById("correo").value;
	telefono = document.getElementById("telefono").value;
	mensaje = document.getElementById("mensaje").value;


	expresion= /\w+@\w+\.+[a-z]/ ;	

	if (nombre== ""||correo == ""||telefono == ""||mensaje == "") {
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

	else if(mensaje.length<5){
		alert("El mensaje tiene pocos caracteres");
		return false;
		
	}
}
