<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Añadir Lote</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Lote</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createLote.php'>Nuevo</a></li>";
			echo "<li><a href='readLote.php'>Consulta</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";
echo "<form method= 'POST' class='form-horizontal' action= 'newLote.php' id='Lote' title='Lote' >";
     echo "<div class='form-group'>";
         echo "<label for='inputArea' class='control-label col-xs-2'>Area:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Area' type='text' id= 'Area' class='form-control' placeholder='Area'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputNombre' class='control-label col-xs-2'>Nombre:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Nombre' type='text' id= 'Nombre' class='form-control' placeholder='Nombre'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputTamano' class='control-label col-xs-2'>Tamaño:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Tamano' type='text' id= 'Tamano' class='form-control' placeholder='Tamano'>";
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