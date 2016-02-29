<!--
	php modifica y crea usuario
	-ccortes- 
 -->
<?php 
	$action = $_GET["accion"];
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
				<a href="home.php"><div class="icon-home h"></div></a>
			</div>
		</head>
		<main>
			<h1 id="titulo">
				<?php  echo $action."  "."Usuario";?>
			</h1>
			<? if($action == "agregar"){ ?>
			<div class="login">
			  <form method="post" action="">
			    <p><input type="text" name="login" value="" placeholder="Nombre Completo"></p>
			    <p><input type="text" name="login" value="" placeholder="Puesto a desempeñar"></p>
			    <p><input type="text" name="login" value="" placeholder="Área"></p>
			    <p><input type="text" name="login" value="" placeholder="Departamento"></p>
			    <p><input type="text" name="login" value="" placeholder="Teléfono"></p>
			    <p><input type="text" name="login" value="" placeholder="Extención"></p>

			    <p class="submit"><input type="submit" name="commit" value="Agregar"></p>
			  </form>
			</div>
			<?
			}else
				{
					echo "holis";
				}
			?>	
			
		</main>
	</div>

</body>
</html>

