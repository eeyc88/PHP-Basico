<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Actualizar Detalle-Tarifario</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Detalle-Tarifario</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createDetalleTarifario.php'>Nuevo</a></li>";
			echo "<li><a href='readDetalleTarifario.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

        $ca =$_GET['idcabeceratarifario'];
	$id =$_GET['id'];
        $l =$_GET['idlabor'];
	$m =$_GET['idmedida'];
	$a =$_GET['valor'];
?>

<form method= "POST" class="form-horizontal" action= "saveDetalleTarifario.php?usuario=" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">CabeceraTarifario:</label>
         <div class="col-xs-10">
             <input name = "CabeceraTarifario" type="text" id= "CabeceraTarifario" class="form-control"
 placeholder="CabeceraTarifario" value="<?php echo $ca;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">DetalleTarifario:</label>
         <div class="col-xs-10">
             <input name = "DetalleTarifario" type="text" id= "DetalleTarifario" class="form-control"
 placeholder="DetalleTarifario" value="<?php echo $id;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Labor:</label>
         <div class="col-xs-10">
             <input name = "Labor" type="text" id= "Labor" class="form-control"
 placeholder="Labor" value="<?php echo $l;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputMedida" class="control-label col-xs-2">Medida:</label>
         <div class="col-xs-10">
             <input name = "Medida" type="text" id= "Medida" class="form-control" placeholder="Medida" value="<?php echo $m;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Valor:</label>
         <div class="col-xs-10">
             <input name = "Valor" type="text" id= "Valor" class="form-control" placeholder="Valor" value="<?php echo $a;?>">
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


