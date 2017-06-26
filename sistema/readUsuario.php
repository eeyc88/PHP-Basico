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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Usuarios</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createUsuario.php'>Nuevo</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();

echo "<div class='container'>";
echo "<h2>Usuarios</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>Código</th>"; 
echo "     <th>Nombre</th>"; 
//echo "     <th>Estado</th>"; 
echo "</tr>"; 
echo "</thead>"; 
foreach ($UsuarioCollectorObj->showUsuarios() as $c){
	echo "<tbody>"; 
	echo "<tr>"; 
	echo "<td>".$c->getIdUsuario()."</td>"; 
	echo "<td>".$c->getNombre()."</td>"; 
 	//if($c->getClave()== '1'){
	//	echo "<td>Activo</td>";
	//}else{
	//	echo "<td>Inactivo</td>";
	//}
	echo "<td><a href='updateUsuario.php?id=".$c->getIdUsuario()."&nombre=".$c->getNombre()."&clave=".$c->getClave()."'>Editar</a></td>"; 
	echo "<td><a href='deleteUsuario.php?id=".$c->getIdUsuario()."&nombre=".$c->getNombre()."'>Eliminar</a></td>"; 
	echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>

</body>
</html>

