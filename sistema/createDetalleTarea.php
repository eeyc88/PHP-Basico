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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla DetalleTareas</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createDetalleTarea.php'>Nuevo</a></li>";
			echo "<li><a href='readDetalleTarea.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'newDetalleTarea.php' id='detalleTarea' title='detalleTarea' >";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Codigo:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Detalletarea' type='text' id= 'Detalletarea' class='form-control' placeholder='Detalletarea'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Tarea:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Cabeceratarea' type='text' id= 'Cabeceratarea' class='form-control' placeholder='Cabeceratarea'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Empleado:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Empleado' type='text' id= 'Empleado' class='form-control' placeholder='Empleado'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Labor:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Labor' type='text' id= 'Labor' class='form-control' placeholder='Labor'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Cantidad:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Cantidad' type='text' id= 'Cantidad' class='form-control' placeholder='Cantidad'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Tarifa:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Tarifa' type='text' id= 'Tarifa' class='form-control' placeholder='Tarifa'>";
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


