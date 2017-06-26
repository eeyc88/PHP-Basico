<?php
session_start();
?>

<?php
if(isset($_SESSION['Garcia'])){
session_destroy();
}
?>

<script>
	alert('Ha salido de su sesion');
	window.location="../index.html";	
</script>
