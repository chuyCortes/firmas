<script>

</script>

<?php 
	include 'core/querys.php';
	$varQuery = new Querys();
	$del = $_GET["userdel"];
	echo $varQuery->eliminaUsurio("datos_firmas",$del);
	
?>