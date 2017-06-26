<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Añadir Periodo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" >
        <link href="../css/tablas.css" rel="stylesheet" >
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.bootgrid.min.js"></script>
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src= "../js/jquery.js" ></script>
</head>

<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Periodo</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createPeriodo.php'>Nuevo</a></li>";
			echo "<li><a href='readPeriodo.php'>Consulta</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";
echo "<form method= 'POST' class='form-horizontal' action= 'newPeriodo.php' id='Periodo' title='Periodo' >";
     echo "<div class='form-group'>";
         echo "<label for='inputNombre' class='control-label col-xs-2'>Nombre:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Nombre' type='text' id= 'Nombre' class='form-control' placeholder='Nombre'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputFechainicio' class='control-label col-xs-2'>Fecha de inicio:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Fechainicio' type='text' id= 'Fechainicio' class='form-control' placeholder='Fechainicio'>";
         echo "</div>";
     echo "</div>";
	 echo "<div class='form-group'>";
         echo "<label for='inputFechafin' class='control-label col-xs-2'>Fecha fin:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Fechafin' type='text' id= 'Fechafin' class='form-control' placeholder='Fechafin'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputEstado' class='control-label col-xs-2'>Estado:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Estado' type='text' id= 'Estado' class='form-control' placeholder='Estado'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<div class='col-xs-offset-2 col-xs-10'>";
             echo "<button type='submit' class='btn btn-primary'>Grabar</button>";
         echo "</div>";
     echo "</div>";
echo "</form>";
?>
