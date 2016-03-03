<!--
	php  Log in
	-ccortes- 
 -->
<?php
	if(session_start() != NULL);
		session_destroy(); 
	
	error_reporting(0);
	include 'core/querys.php';
	$varQuery = new Querys();
		

?>
 <!DOCTYPE html>
<html>
<head>
	<title>Creador de firmas DTI</title>
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/css/fontello.css">
	<script src="script/home.js"></script>

</head>
<body>
	<div class="contenedor">
		<head>
			<div id="Menu">
				<a href="index.php"><div class="icon-home h"></div></a>
			</div>
		</head>
		<main>
			<h1 class="titulo">
				Log in
			</h1>
			
			<?php
			if(isset($_POST['Submit'])){
				$correo ='"'.$_POST["correo"].'"';
				$contra ='"'.$_POST["contra"].'"';
				$tar = $correo.",".$contra;
			 	$var= $varQuery->inicio_secion($tar);
			 	if($var)
			 	{
			 		session_start();
			 		$_SESSION['username'] = $var[1];
			 		header('Location:home.php');
			 		//echo $_SESSION['username'];
			 	///
			 	?>
			 	<!--  -->
			 		
			 	<!--  -->
			 <?php	
			 	///
			}
			else{
				echo "<h1>No se tiene permisos para entrar en modo administrador</h1>";
			}
			}else{
			?>
			<div class="login">
			  <form method="post" action="">
			    <p><input type="text" name="correo" value="" placeholder="Correo Electrónico"required></p>
			    <p><input type="password" name="contra" value="" placeholder="Contraseña"required></p>
			    <p class="submit"><input type="submit" name="Submit" value="Entrar"></p>
			  </form>
			</div>
			<?php }?>
		</main>
	</div>

</body>
</html>

