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
	<script src= "../js/jquery.js" ></script>
	<script src="../js/jquery.bootgrid.min.js"></script>
	<script src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>

<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Control Agrícola</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
		$usuario = $_POST['Nombre'] ;
		$_SESSION['Garcia'] = $usuario;

			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";

		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

 /*echo "<div id='panel'>";
$usuario = $_POST['Nombre']  .$_POST['Apellido'];

	$_SESSION['Garcia'] = $usuario;
	if (isset($_SESSION['Garcia'])){
          echo "<div id='welcome'>";
		echo "Hola Usuario :";
          echo "</div>";	
	}
	echo '(' . $_SESSION ['Garcia'] . ')';	
	 	
 echo"</div>";
*/
?>
</body>
</html>
