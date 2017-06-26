<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ingresar</title>
		<meta name= "viewport" content= "width = device-width, initial-escale=1.0">
		<meta http-equiv= "Content-Type" content= "text/html; charset=UTF-8" />
		<link rel= "stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel= "stylesheet" type="text/css" href="../css/login.css">
	</head>
	<body>
		<div class="jumbotron boxlogin" >
                  <img src="../images/logo.png" alt="JARE Solutions" title="JARE Soluions" style="width:279px;height:47px;">

<?php

 if (isset($_SESSION['Garcia'])){
 echo "<p> Hola Usuario: (" . $_SESSION['Garcia']. ")  [<a href = 'logout.php' >Cerrar Sesión</a>]";

}
else{
}
?>
			<form method="POST" name = "flogin" id = "flogin" action ="login.php" >
				<label>Nombre de Usuario:</label>
				<input type="text" name="Nombre" id = "Nombre" class="form-control">
				<label>Contraseña:</label>
				<input type="password" name="Apellido" id="Apellido" class="form-control">
                                <input type="submit" value="Conectarse" class="btn btn-success" />
				
			</form>
		</div>

	</body>
</html>
