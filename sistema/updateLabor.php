<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Actualizar Labores</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Labores</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createLabor.php'>Nuevo</a></li>";
			echo "<li><a href='readLabor.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

	$id =$_GET['id'];
        $g =$_GET['idgrupolabor'];
	$n =$_GET['nombre'];
	$a =$_GET['estado'];
?>

<form method= "POST" class="form-horizontal" action= "saveLabor.php?usuario=" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Código:</label>
         <div class="col-xs-10">
             <input name = "Codigo" type="text" id= "Codigo" class="form-control"
 placeholder="Codigo" value="<?php echo $id;?>" readonly>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Grupo Labor:</label>
         <div class="col-xs-10">
             <input name = "GrupoLabor" type="text" id= "GrupoLabor" class="form-control"
 placeholder="Grupo Labor" value="<?php echo $g;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombre:</label>
         <div class="col-xs-10">
             <input name = "Nombre" type="text" id= "Nombre" class="form-control" placeholder="Nombre" value="<?php echo $n;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Estado:</label>
         <div class="col-xs-10">
             <input name = "Estado" type="text" id= "Estado" class="form-control" placeholder="Estado" value="<?php echo $a;?>">
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


