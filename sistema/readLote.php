<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Lote</title>
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
			echo "<li><a href='createLote.php'>Nuevo</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

include_once("LoteCollector.php");
$LoteCollectorObj = new LoteCollector();

echo "<div class='container'>";
echo "<h2>Lote</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>Código</th>"; 
echo " 	   <th>CódigoArea</th>"; 
echo "     <th>Nombre</th>"; 
echo "     <th>Tamaño</th>";
echo "     <th>Estado</th>"; 
echo "</tr>"; 
echo "</thead>"; 
foreach ($LoteCollectorObj->showLote() as $c)
{
	echo "<tbody>"; 
	echo "<tr>"; 
	echo "<td>".$c->getIdLote()."</td>"; 
	echo "<td>".$c->getIdArea()."</td>"; 
	echo "<td>".$c->getNombre()."</td>"; 
    echo "<td>".$c->getTamano()."</td>"; 
	echo "<td>".$c->getEstado()."</td>"; 
	echo "<td><a href='updateLote.php?id=".$c->getIdLote()."&idArea=".$c->getIdArea()."&nombre=".$c->getNombre()."&tamano=".$c->getTamano()."&estado=".$c->getEstado()."'>Editar</a></td>"; 
	echo "<td><a href='deleteLote.php?id=".$c->getIdLote()."&idArea=".$c->getIdArea()."&nombre=".$c->getNombre()."&tamano=".$c->getTamano()."'>Eliminar</a></td>"; 
	echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>

</body>
</html>

