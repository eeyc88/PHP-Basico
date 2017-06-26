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
                 <link href="../css/login.css" rel="stylesheet" >

        <link href="../css/tablas.css" rel="stylesheet" >
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>


<style type="text/css">
#contenedor {
    display: table;
    border: 2px solid #000;
    width: 333px;
    text-align: center;
    margin: 0 auto;
}
#contenidos {
    display: table-row;
}
#columna1, #columna2, #columna3, #columna4, #columna5 {
    display: table-cell;
    border: 1px solid #000;
    vertical-align: middle;
    padding: 10px;
}
</style>

	</head>

	<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	   echo "<div class='navbar-header'><a class='navbar-brand' >Control Agrícola</a></div>";
	    //echo "<div class='navbar-header'><a class='navbar-brand' >Menú</a></div>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


echo"<div id='tabla'>";   
	echo "<div id='contenedor'>";
	    	echo "<div id='contenidos'>";
		echo "<div id='columna1' ><a href='readCultivo.php'>Cultivos</a></div>";
		echo "<div id='columna2'><a href='readArea.php'>Áreas</div>";
		echo "<div id='columna3'><a href='readLote.php'>Lotes</div>";
		echo "<div id='columna4'><a href='readCultivoLote.php'>Cultivos por Lotes</div>";
		echo "</div>";
		echo "<div id='contenidos'>";
		echo "<div id='columna1'><a href='readMedida.php'>Medidas</div>";
		echo "<div id='columna2'><a href='readLabor.php'>Labores</div>";
		echo "<div id='columna3'><a href='readPeriodo.php'>Periodos</div>";
		echo "<div id='columna4'><a href='readEmpleado.php'>Empleados</div>";
		echo "</div>";
		echo "<div id='contenidos'>";
		echo "<div id='columna1'><a href='readGrupoLabor.php'>Grupos de Labores</div>";
		echo "<div id='columna2'><a href='readCabeceraTarifario.php'>Cabecera de Tarifario</div>";
		echo "<div id='columna3'><a href='readCabeSupervision.php'>Cabecera de SupervisiónDRON</div>";
		echo "<div id='columna4'><a href='readTarea.php'>Cabecera de Tareas</div>";
		echo "</div>";
		echo "<div id='contenidos'>";
		echo "<div id='columna1'><a href='readDepartamento.php'>Departamentos</div>";
		echo "<div id='columna2'><a href='readDetalleTarifario.php'>Detalle de Tarifario</div>";
		echo "<div id='columna3'><a href='readDetaSupervision.php'>Detalle de SupervisiónDRON</div>";
		echo "<div id='columna4'><a href='readDetalleTarea.php'>Detalle de Tareas</div>";
		echo "</div>";
		echo "<div id='contenidos'>";
		echo "<div id='columna1'><a href='readCargo.php'>Cargos</div>";
		echo "<div id='columna2'><a href='readUsuario.php'>Usuarios</div>";
		echo "<div id='columna3'></div>";
		echo "<div id='columna4'></div>";
		echo "</div>";
	echo "</div>";
	echo "</div>";


?>
</body>
</html>
