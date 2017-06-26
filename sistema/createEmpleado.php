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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Empleados</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createEmpleado.php'>Nuevo</a></li>";
			echo "<li><a href='readEmpleado.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'newEmpleado.php' id='empleado' title='empleado' >";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Nombre:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Nombre' type='text' id= 'Nombre' class='form-control' placeholder='Nombre'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputLastname' class='control-label col-xs-2'>Apellido:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Apellido' type='text' id= 'Apellido' class='form-control' placeholder='Apellido'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputDepartment' class='control-label col-xs-2'>Departamento:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Departamento' type='text' id= 'Departamento' class='form-control' placeholder='Departamento'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputPosition' class='control-label col-xs-2'>Cargo:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Cargo' type='text' id= 'Cargo' class='form-control' placeholder='Cargo'>";
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


