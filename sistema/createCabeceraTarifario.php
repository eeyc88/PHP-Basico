<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Añadir Cabecera-Tarifario</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Cabecera-Tarifario</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createCabeceraTarifario.php'>Nuevo</a></li>";
			echo "<li><a href='readCabeceraTarifario.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'newCabeceraTarifario.php' id='cabeceratarifario' title='cabeceratarifario' >";
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
         echo "<label for='inputCultivo' class='control-label col-xs-2'>Cultivo:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Cultivo' type='text' id= 'Cultivo' class='form-control' placeholder='Cultivo'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputFecha' class='control-label col-xs-2'>Fecha:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Fecha' type='text' id= 'Fecha' class='form-control' placeholder='Fecha'>";
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

	</body>
</html>


