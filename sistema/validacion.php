<?php session_start(); ?>
<?php
$name = $_POST['Nombre'];
$lastname = $_POST['Apellido'];

include_once('UsuarioCollector.php');
$UsuarioCollectorObj = new UsuarioCollector();


if((!empty($name))&&(!empty($lastname)))
{
	$UsuarioCollectorObj->showUsuario($name,$lastname);
	if (($name == $_POST['Nombre']) && ($lastname == $_POST['Apellido']))
	{
		session_start();
		$_SESSION['usuario'] = $name;?>
		<script>
			alert('Acceso Exitoso');
			window.location = "login.php";
		</script><?php
	}else{?>
		<script>
        		alert('Acceso Denegado');
        		window.location="../index.html";        
		</script><?php }
}
?>

