
<?php
session_start();


$name = $_POST['Nombre'];
$password = $_POST['Apellido'];

include_once('UsuarioCollector.php');
$UsuarioCollectorObj = new UsuarioCollector();
foreach ($UsuarioCollectorObj->showUsuario() as $c)
{
	if(($c->getNombre()==$name)&&($c->getClave()==$password)){
		$_SESSION['usuario'] = $name;?>
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


