<?php
session_start();
?>

<?php
if(isset($_SESSION['Salmeron'])){
session_destroy();
}
?>

<script>
	alert('Ha salido de su sesion');
	window.location="index.php";	
</script>
