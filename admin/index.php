<!--
	php modifica y crea usuario
	-ccortes- 
 -->
<?php
	 
	session_start();
	// if(!isset($_SESSION['usuario']))
 //   {
 //        echo "No hay ninguna sesion iniciada";
	// 		//esto ocurre cuando la sesion caduca.   

 //   }
 //   else
 //   { 
 //     session_destroy();
 //       //echo "Has cerrado la sesion";

	// echo "<meta content='0;URL=index.php' http-equiv='REFRESH'> </meta>";
       
   //}
 

	//error_reporting(0);
	include 'core/querys.php';
	$varQuery = new Querys();

		if(isset($_POST['Submit']))
		{
			$correo_post='"'.utf8_decode($_POST["correo"]).'"';
			$password_post='"'.utf8_decode($_POST["password"]).'"';

			$campos = $correo_post.",".$password_post; 
			echo $valores = $varQuery->inicio_secion($campos);
		}

		 
		

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
			</div>
		</head>
		<main>
			<h1 class="titulo">
				Log in
			</h1>
			<div class="login">
			  <form method="post" action="">
			    <p><input type="text" name="correo" value="" placeholder="Correo Electrónico" ></p>
			    <p><input type="password" name="password" value="" placeholder="Contraseña" ></p>
			    <p class="submit"><input type="submit" name="Submit" value="Entrar"></p>
			  </form>
			</div>	
		</main>
	</div>

</body>
</html>

