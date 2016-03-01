<!--
	php modifica y crea usuario
	-ccortes- 
 -->
<?php 
	include 'core/querys.php';
	$varQuery = new Querys();

	$action = $_GET["accion"];
	if($action=="modificar")
	{
		$usuario = $_GET["usuario"];
		$valores = $varQuery->ejecutarSql($usuario);

		$nombre_firma=utf8_encode($valores["nombre_firma"]);
		$puesto=utf8_encode($valores["puesto"]);
		$area=utf8_encode($valores["area"]);
		$departamento=utf8_encode($valores["departamento"]);
		$tel=utf8_encode($valores["tel"]);
		$ext=utf8_encode($valores["ext"]);
		$m=true;

		if(isset($_POST['Submit']))
		{
			$nombre_firma_post ='"'.utf8_decode($_POST["nombre_firma"]).'"';
			$puesto_post= '"'.utf8_decode($_POST["puesto"]).'"';
			$area_post ='"'.utf8_decode($_POST["area"]).'"';
			$departamento_post ='"'.utf8_decode($_POST["departamento"]).'"';
			$tel_post ='"'.utf8_decode($_POST["tel"]).'"';
			$ext_post='"'.utf8_decode($_POST["ext"]).'"';

			$campos = $nombre_firma_post."/".$puesto_post."/".$area_post."/".$departamento_post."/".$tel_post."/".$ext_post; 
			$valores = $varQuery->updateUsuario("datos_firmas",$campos,$usuario);
				
		}

	}
	else
	{
		$nombre_firma="Nombre completo";
		$puesto="Puesto a desempeñar";
		$area="Área";
		$departamento="Departamento";
		$tel="Teléfono";
		$ext="Extención";
		$m=false;

		if(isset($_POST['Submit']))
		{
			$nombre_firma_post ='"'.utf8_decode($_POST["nombre_firma"]).'"';
			$puesto_post= '"'.utf8_decode($_POST["puesto"]).'"';
			$area_post ='"'.utf8_decode($_POST["area"]).'"';
			$departamento_post ='"'.utf8_decode($_POST["departamento"]).'"';
			$tel_post ='"'.utf8_decode($_POST["tel"]).'"';
			$ext_post='"'.utf8_decode($_POST["ext"]).'"';

			$campos = $nombre_firma_post."/".$puesto_post."/".$area_post."/".$departamento_post."/".$tel_post."/".$ext_post; 
			$valores = $varQuery->agregarUsuario("datos_firmas",$campos);
			
		}
		
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
				<a href="home.php"><div class="icon-home h"></div></a>
			</div>
		</head>
		<main>
			<h1 class="titulo">
				<?php  echo $action."  "."Usuario";?>
			</h1>
			<div class="login">
			  <form method="post" action="">
			  <?php if($m){?>
			    <p><input type="text" name="nombre_firma" value="<?php echo $nombre_firma ?>" placeholder="Nombre completo"></p>
			    <p><input type="text" name="puesto" value="<?php echo $puesto ?>" placeholder="Puesto a desempeñar"></p>
			    <p><input type="text" name="area" value="<?php echo $area ?>" placeholder="Área"></p>
			    <p><input type="text" name="departamento" value="<?php echo $departamento ?>" placeholder="Departamento"></p>
			    <p><input type="text" name="tel" value="<?php echo $tel ?>" placeholder="Teléfono"></p>
			    <p><input type="text" name="ext" value="<?php echo $ext ?>" placeholder="Extención"></p>
			  <?php }else{?>
			  	<p><input type="text" name="nombre_firma" value="" placeholder="<?php echo $nombre_firma ?>"></p>
			    <p><input type="text" name="puesto" value="" placeholder="<?php echo $puesto ?>"></p>
			    <p><input type="text" name="area" value="" placeholder="<?php echo $area ?>"></p>
			    <p><input type="text" name="departamento" value="" placeholder="<?php echo $departamento ?>"></p>
			    <p><input type="text" name="tel" value="" placeholder="<?php echo $tel ?>"></p>
			    <p><input type="text" name="ext" value="" placeholder="<?php echo $ext ?>"></p>
			  <?php } ?>
			    <p class="submit"><input type="submit" name="Submit" value="<?php echo $action ?>"></p>
			  </form>
			</div>	
		</main>
	</div>

</body>
</html>

