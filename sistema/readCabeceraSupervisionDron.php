<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Cabecera Supervision-Dron</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Cabecera Supervision-Dron</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createCabeceraSupervisionDron.php'>Nuevo</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

include_once("CabeceraSupervisionDronCollector.php");
$CabeceraSupervisionDronCollectorObj = new CabeceraSupervisionDronCollector();

echo "<div class='container'>";
echo "<h2>Cabecera Supervision-Dron</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>Código</th>"; 
echo " 	   <th>Periodo</th>"; 
echo "     <th>Fecha</th>"; 
echo " 	   <th>Supervisor</th>"; 
echo " 	   <th>Cultivo Lote</th>"; 
echo "     <th>Estado</th>"; 
echo "</tr>"; 
echo "</thead>"; 
foreach ($CabeceraSupervisionDronCollectorObj->showCabeceraSupervisionDron() as $c){
	echo "<tbody>"; 
	echo "<tr>"; 
	echo "<td>".$c->getIdCabeceraDron()."</td>"; 
    echo "<td>".$c->getIdPeriodo()."</td>";  
	echo "<td>".$c->getFecha()."</td>"; 
	echo "<td>".$c->getSupervisor()."</td>"; 
	echo "<td>".$c->getIdCultivoLote()."</td>";
    echo "<td>".$c->getEstado()."</td>"; 
	echo "<td><a href='updateCabeceraSupervisionDron.php?id=".$c->getIdCabeceraDron()."&idperiodo=".$c->getIdPeriodo()."&idCultivoLote=".$c->getIdCultivoLote()."&fecha=".$c->getFecha()."&supervisor=".$c->getSupervisor()."&estado=".$c->getEstado()."'>Editar</a></td>"; 
	echo "<td><a href='deleteCabeceraSupervisionDron.php?id=".$c->getIdCabeceraDron()."&idperiodo=".$c->getIdPeriodo()."&idCultivoLote=".$c->getIdCultivoLote()."&fecha=".$c->getFecha()."'>Eliminar</a></td>"; 
	echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>

</body>
</html>

