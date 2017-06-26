<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Nuevo Lote</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Lote</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createLote.php'>Nueva</a></li>";
			echo "<li><a href='readLote.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

$a = $_POST['Area'];
$n = $_POST['Nombre'];
$d = $_POST['Tamano'];
$e = $_POST['Estado'];

include_once("LoteCollector.php");
$LoteCollectorObj = new LoteCollector();
$LoteCollectorObj->insertLote($a,$n,$d,$e);

echo "<br>";

echo "<div class='container'>";
echo "  <h2>Lote</h2>";
echo "  <div class='panel panel-default'>";
echo "    <div class='panel-heading'>Registro Ingresado Correctamente</div>";
echo "    <div class='panel-body'>$n,$d</div>";
echo "  </div>";
echo "</div>";

?>

</body>
</html>
