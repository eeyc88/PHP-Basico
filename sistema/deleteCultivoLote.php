<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Menú</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" >
        <link href="../css/tablas.css" rel="stylesheet" >
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla CultivoLotes</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createCultivoLote.php'>Nuevo</a></li>";
			echo "<li><a href='readCultivoLote.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

	$i =$_GET['idcultivolote'];
	$p =$_GET['idperiodo'];
	$l =$_GET['idlote'];
	$c =$_GET['idcultivo'];
	$f =$_GET['fecha'];
	$e =$_GET['estado'];

	include_once("cultivoLoteCollector.php");
	$CultivoLoteCollectorObj = new CultivoLoteCollector();
	$CultivoLoteCollectorObj->deleteCultivoLote($i);

	echo "<br>";

	echo "<div class='container'>";
	echo "  <h2>CultivoLotes</h2>";
	echo "  <div class='panel panel-default'>";
	echo "    <div class='panel-heading'>Registro Eliminado Correctamente</div>";
	echo "    <div class='panel-body'>$i</div>";
	echo "  </div>";
	echo "</div>";	 
?>

</body>
</html>
