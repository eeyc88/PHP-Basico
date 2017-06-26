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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Tareas</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createTarea.php'>Nuevo</a></li>";
			echo "<li><a href='readTarea.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

	$id =$_GET['idcabeceratarea'];
	$p =$_GET['periodo'];
	$f =$_GET['fecha'];
	$s =$_GET['supervisor'];
	$c =$_GET['idcultivolote'];
	$e =$_GET['estado'];
?>

<form method= "POST" class="form-horizontal" action= "saveTarea.php?usuario=" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Código:</label>
         <div class="col-xs-10">
             <input name = "Codigo" type="text" id= "Codigo" class="form-control" placeholder="Codigo" value="<?php echo $id;?>" readonly>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Periodo:</label>
         <div class="col-xs-10">
             <input name = "Periodo" type="text" id= "Periodo" class="form-control" placeholder="Periodo" value="<?php echo $p;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Fecha:</label>
         <div class="col-xs-10">
             <input name = "Fecha" type="text" id= "Fecha" class="form-control" placeholder="Fecha" value="<?php echo $f;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Supervisor:</label>
         <div class="col-xs-10">
             <input name = "Supervisor" type="text" id= "Supervisor" class="form-control" placeholder="Supervisor" value="<?php echo $s;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">CultivoLote:</label>
         <div class="col-xs-10">
             <input name= "Cultivolote" type="text" id="Cultivolote" class="form-control" placeholder="Cultivolote" value="<?php echo $c;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Estado:</label>
         <div class="col-xs-10">
             <input name = "Estado" type="text" id= "Estado" class="form-control" placeholder="Estado" value="<?php echo $e;?>">
         </div>
     </div>
     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
</form>



	</body>
</html>


