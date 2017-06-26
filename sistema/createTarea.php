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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Tareas</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createTarea.php'>Nuevo</a></li>";
			echo "<li><a href='readTarea.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'newTarea.php' id='cabeceratarea' title='cabeceratarea' >";
     echo "<div class='form-group'>";
         echo "<label for='inputCodigo' class='control-label col-xs-2'>Codigo:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Codigo' type='text' id= 'Codigo' class='form-control' placeholder='Codigo'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputPeriodo' class='control-label col-xs-2'>Periodo:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Periodo' type='text' id= 'Periodo' class='form-control' placeholder='Periodo'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputFecha' class='control-label col-xs-2'>Fecha:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Fecha' type='text' id= 'Fecha' class='form-control' placeholder='Fecha'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputSupervisor' class='control-label col-xs-2'>Supervisor:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Supervisor' type='text' id= 'Supervisor' class='form-control' placeholder='Supervisor'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputCultivolote' class='control-label col-xs-2'>CultivoLote:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Cultivolote' type='text' id= 'Cultivolote' class='form-control' placeholder='Cultivolote'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputEstado' class='control-label col-xs-2'>Estado:</label>";
         echo "<div class='col-xs-10'>";
		 echo "<select class='form-control' name='Estado'>";
		    echo "<option value= '1'selected>Activo</option>";
		    echo "<option value= '2'>Inactivo</option>";
		 echo " </select>";
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


