<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Añadir Detalle-Tarifario</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Detalle-Tarifario</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createDetalleTarifario.php'>Nuevo</a></li>";
			echo "<li><a href='readDetalleTarifario.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'newDetalleTarifario.php' id='detalletarifario' title='detalletarifario' >";
     echo "<div class='form-group'>";
         echo "<label for='inputCabeceraTarifario' class='control-label col-xs-2'>CabeceraTarifario:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'CabeceraTarifario' type='text' id= 'CabeceraTarifario' class='form-control' placeholder='CabeceraTarifario'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputDetalleTarifario' class='control-label col-xs-2'>DetalleTarifario:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'DetalleTarifario' type='text' id= 'DetalleTarifario' class='form-control' placeholder='DetalleTarifario'>";
         echo "</div>";
     echo "</div>";
      echo "<div class='form-group'>";
         echo "<label for='inputLabor' class='control-label col-xs-2'>Labor:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Labor' type='text' id= 'Labor' class='form-control' placeholder='Labor'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputMedida' class='control-label col-xs-2'>Medida:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Medida' type='text' id= 'Medida' class='form-control' placeholder='Medida'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputValor' class='control-label col-xs-2'>Valor:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Valor' type='text' id= 'Valor' class='form-control' placeholder='Valor'>";
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
