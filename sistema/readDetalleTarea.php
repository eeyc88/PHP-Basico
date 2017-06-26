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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla DetalleTareas</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createDetalleTarea.php'>Nuevo</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

include_once("detalletareaCollector.php");
$DetalleTareaCollectorObj = new DetalleTareaCollector();

echo "<div class='container'>";
echo "<h2>DetalleTareas</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>Código</th>"; 
echo "     <th>Tarea</th>"; 
echo "     <th>Empleado</th>";
echo "     <th>Labor</th>";
echo "     <th>Cantidad</th>";
echo "     <th>Tarifa</th>"; 
echo "</tr>"; 
echo "</thead>"; 
foreach ($DetalleTareaCollectorObj->showDetalleTareas() as $c){
	echo "<tbody>"; 
	echo "<tr>"; 
	echo "<td>".$c->getIddetalletarea()."</td>"; 
	echo "<td>".$c->getIdcabeceratarea()."</td>";
	echo "<td>".$c->getIdempleado()."</td>"; 
	echo "<td>".$c->getIdlabor()."</td>";
	echo "<td>".$c->getCantidad()."</td>";
	echo "<td>".$c->getTarifa()."</td>";
 	
	echo "<td><a href='updateDetalleTarea.php?iddetalletarea=".$c->getIddetalletarea()."&idcabeceratarea=".$c->getIdcabeceratarea()."&idempleado=".$c->getIdempleado()."&idlabor=".$c->getIdlabor()."&cantidad=".$c->getCantidad()."&tarifa=".$c->getTarifa()."'>Editar</a></td>"; 
	echo "<td><a href='deleteDetalleTarea.php?iddetalletarea=".$c->getIddetalleTarea()."&idcabeceratarea=".$c->getIdcabeceratarea()."&idempleado=".$c->getIdempleado()."&idlabor=".$c->getIdlabor()."&cantidad=".$c->getCantidad()."&tarifa=".$c->getTarifa()."'>Eliminar</a></td>"; 
	echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>

</body>
</html>

