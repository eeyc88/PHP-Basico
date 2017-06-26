<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Nuevo</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Departamentos</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createDepartamento.php'>Nuevo</a></li>";
			echo "<li><a href='readDepartamento.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'newDepartamento.php' id='Departamento' title='Departamento' >";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Nombre:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'Nombre' type='text' id= 'Nombre' class='form-control' placeholder='Nombre'>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<label for='inputEstado' class='control-label col-xs-2'>Estado:</label>";
         echo "<div class='col-xs-10'>";
		 echo "<select class='form-control' name='Estado'>";
		    echo "<option value= '1'selected>Activo</option>";
		    echo "<option value= '2'>Inactivo</option>";
		 echo " </select>";
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


