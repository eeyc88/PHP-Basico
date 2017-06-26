<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Nuevo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Usuarios</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createUsuario.php'>Nuevo</a></li>";
			echo "<li><a href='readUsuario.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'newUsuario.php' id='Usuario' title='Usuario' >";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Nombre:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Nombre' type='text' id= 'Nombre' class='form-control' placeholder='Nombre'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputPassword' class='control-label col-xs-2'>Password:</label>";
         echo "<div class='col-xs-10'>";
		 echo "<input name = 'Password' type='password' id= 'Password' class='form-control' placeholder='Password'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<div class='col-xs-offset-2 col-xs-10'>";
             echo "<button type='submit' class='btn btn-primary'>Grabar</button>";
         echo "</div>";
     echo "</div>";
echo "</form>";
?>

	</body>
</html>


