
<?php


$name = $_POST['Nombre'];
$password = $_POST['Apellido'];

include_once('UsuarioCollector.php');
$UsuarioCollectorObj = new UsuarioCollector();
foreach ($UsuarioCollectorObj->showUsuario($name,$password) as $c)
{
	if(($c->getNombre()==$name)&&($c->getClave()==$password)){
		session_start();
		$_SESSION['Garcia'] = $name;?>
		<script>
			alert('Acceso Exitoso');
			window.location = "login.php";
		</script><?php
	}
}?>
		<script>
        		alert('Acceso Denegado');
        		window.location="../index.html";        
		</script>


