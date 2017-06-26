<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
	<head>
		<title>MenuPrincipal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	        <link href="css/bootstrap.min.css" rel="stylesheet" >
                <link href="css/login.css" rel="stylesheet" >

	</head>

	<body>

 <?php
$usuario = $_POST['username'];
$password = $_POST['password'];

$usr_valido = 'administrador';
$psw_valido = '1234';


 if($usuario== $usr_valido && $password==$psw_valido){
       echo "<div id='panel'>";
        echo "<div id='welcome'>";
	echo 'Bienvenid@ ' . $usuario;
	$_SESSION['Garcia']=$usuario;
        echo "</div>";
        echo '<br>';

	echo "<div id='salir'><a href='logout.php'>Salir</a></div>";

        if (isset($_SESSION['Garcia'])){
        echo '<br>';
	echo "Se ha creado sesion";
	}

      echo"</div>";
}
else{
      echo "<div class=\"info\">Usuario o clave incorrecta;n</div>";
      header('Location: index.php');
      session_destroy();
    
}

?>
	<br/><br/>
	<div class= "container">
	<br>
	<header>
	<nav class = "navbar navbar-default" >
	<div class= "container-fluid">
	
	<div class= "navbar-header">
	<button type = "button" class = "navbar-toggle collapsed" data-toggle= "collapse" data-target= "#barra">
		<span class = "sr-only" >Menu</span>
		<span class = "icon-bar"></span>
		<span class = "icon-bar"></span>
		<span class = "icon-bar"></span>
	</button>

	
	<a href = "#" class= "navbar-brand"> Sistema de Control de Labores</a>
	</div>

	<div class ="collapse navbar-collapse " id = "barra">
	<ul class = "nav navbar-nav">
	<li><a href = "#"><span class = "glyphicon glyphicon-home"> </span> Inicio</a></li>

	<li class = "dropdown">
	<a href= "#" class = "dropdown-toggle" data-toggle= "dropdown" role = "button"><span class = "glyphicon glyphicon-cog"> </span>  Mantenimientos <span class = "caret"></span></a>
	<ul class = "dropdown-menu">
		<li><a href= "#">Areas</a></li>
		<li><a href= "#">Lotes</a></li>
		<li><a href= "#">Cultivos</a></li>
		<li><a href= "#">Labores</a></li>
		<li><a href= "#">Tarifas</a></li>
	</ul>
	</li>

	<li><a href = "#"><span class = "glyphicon glyphicon-folder-open"> </span> Procesos</a></li>
	<li><a href = "#"><span class = "glyphicon glyphicon-list"> </span> Consultas</a></li>
	

	</ul>

	</div>


	</div>
	</nav>
	</header>	
	</div>
	<script src= "js/jquery.js" ></script>
	<script src= "js/bootstrap.min.js" ></script>


	</body>
</html>
