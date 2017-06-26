<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Menú</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Medidas</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createMedida.php'>Nuevo</a></li>";
			echo "<li><a href='readMedida.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

$n = $_POST['Nombre'];
$a = $_POST['Estado'];

echo "<br>";

if(trim($n) == '' or trim($a) == ''){
	echo "<div class='container'>";
	echo "  <h2>Medidas</h2>";
	echo "  <div class='panel panel-danger'>";
	echo "    <div class='panel-heading'>Los campos no pueden estar vacios</div>";
	echo "  </div>";
	echo "</div>";
   }else{
		include_once("MedidaCollector.php");
		$MedidaCollectorObj = new MedidaCollector();
		$MedidaCollectorObj->insertMedidas($n,$a);

		echo "<div class='container'>";
		echo "  <h2>Medidas</h2>";
		echo "  <div class='panel panel-default'>";
		echo "    <div class='panel-heading'>Registro Ingresado Correctamente</div>";
		echo "    <div class='panel-body'>$n</div>";
		echo "  </div>";
		echo "</div>";
   	}
   
?>

</body>
</html>
