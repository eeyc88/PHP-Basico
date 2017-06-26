<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Detalle Tarifario</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Detalle-Tarifario</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createDetalleTarifario.php'>Nuevo</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

include_once("DetalleTarifarioCollector.php");
$DetalleTarifarioCollectorObj = new DetalleTarifarioCollector();

echo "<div class='container'>";
echo "<h2>Detalle Tarifario</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>CabeceraTarifario</th>"; 
echo " 	   <th>DetalleTarifario</th>"; 
echo " 	   <th>Labor</th>"; 
echo "     <th>Medida</th>"; 
echo "     <th>Valor</th>"; 
echo "</tr>"; 
echo "</thead>"; 
foreach ($DetalleTarifarioCollectorObj->showDetallesTarifarios() as $c){
	echo "<tbody>"; 
	echo "<tr>"; 
	echo "<td>".$c->getIdCabeceraTarifario()."</td>"; 
        echo "<td>".$c->getIdDetalleTarifario()."</td>"; 
	echo "<td>".$c->getIdLabor()."</td>"; 
	echo "<td>".$c->getIdMedida()."</td>"; 
        echo "<td>".$c->getValor()."</td>"; 
	echo "<td><a href='updateDetalleTarifario.php?idcabeceratarifario=".$c->getIdCabeceraTarifario()."&id=".$c->getIdDetalleTarifario()."&idlabor=".$c->getIdLabor()."&idmedida=".$c->getIdMedida()."&valor=".$c->getValor()."'>Editar</a></td>"; 
	echo "<td><a href='deleteDetalleTarifario.php?idcabeceratarifario=".$c->getIdCabeceraTarifario()."&id=".$c->getIdDetalleTarifario()."&idlabor=".$c->getIdLabor()."&idmedida=".$c->getIdMedida()."&valor=".$c->getValor()."'>Eliminar</a></td>"; 
	echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>

</body>
</html>

