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
		$usuario = $varQuery->limpiar($usuario); // SE AGREGO ultimo 
		$valores = $varQuery->ejecutarSql($usuario);

		$nombre_firma=utf8_encode($valores["nombre_firma"]);
		$puesto=utf8_encode($valores["puesto"]);
		$area=utf8_encode($valores["area"]);
		$departamento=utf8_encode($valores["departamento"]);
		$tel=utf8_encode($valores["tel"]);
		$ext=utf8_encode($valores["ext"]);
		$cel=utf8_encode($valores["cel"]);
		$correo =utf8_encode($valores["correo"]);
		$m=true;

		if(isset($_POST['Submit']))
		{

			// $nombre_firma_post ='"'.utf8_decode($_POST["nombre_firma"]).'"';
			// $puesto_post= '"'.utf8_decode($_POST["puesto"]).'"';
			// $area_post ='"'.utf8_decode($_POST["area"]).'"';
			// $departamento_post ='"'.utf8_decode($_POST["departamento"]).'"';
			// $tel_post ='"'.utf8_decode($_POST["tel"]).'"';
			// $ext_post='"'.utf8_decode($_POST["ext"]).'"';
			// $correo_post = '"'.utf8_decode($_POST["correo"]).'"';

			$nombre_firma_post= $varQuery->limpiar(utf8_decode($_POST["nombre_firma"])); 
			$nombre_firma_post ='"'.$nombre_firma_post.'"';
			$puesto_post= $varQuery->limpiar(utf8_decode($_POST["puesto"])); 
			$puesto_post ='"'.$puesto_post.'"';
			$area_post= $varQuery->limpiar(utf8_decode($_POST["area"])); 
			$area_post ='"'.$area_post.'"';
			$departamento_post= $varQuery->limpiar(utf8_decode($_POST["departamento"])); 
			$departamento_post ='"'.$departamento_post.'"';
			$tel_post= $varQuery->limpiar(utf8_decode($_POST["tel"])); 
			$tel_post ='"'.$tel_post.'"';
			$ext_post= $varQuery->limpiar(utf8_decode($_POST["ext"])); 
			$ext_post ='"'.$ext_post.'"';
			$cel_post= $varQuery->limpiar(utf8_decode($_POST["cel"])); 
			$cel_post ='"'.$cel_post.'"';
			$correo_post= $varQuery->limpiar(utf8_decode($_POST["correo"])); 
			$correo_post ='"'.$correo_post.'"';


			$campos = $nombre_firma_post."°".$puesto_post."°".$area_post."°".$departamento_post."°".$tel_post."°".$ext_post."°".$cel_post."°".$correo_post; 
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
		$cel="Celular";
		$correo = "Correo Electrónico";
		$m=false;

		if(isset($_POST['Submit']))
		{
			// $nombre_firma_post ='"'.utf8_decode($_POST["nombre_firma"]).'"';
			// $puesto_post= '"'.utf8_decode($_POST["puesto"]).'"';
			// $area_post ='"'.utf8_decode($_POST["area"]).'"';
			// $departamento_post ='"'.utf8_decode($_POST["departamento"]).'"';
			// $tel_post ='"'.utf8_decode($_POST["tel"]).'"';
			// $ext_post='"'.utf8_decode($_POST["ext"]).'"';
			// $correo_post='"'.utf8_decode($_POST["correo"]).'"';

			$nombre_firma_post= $varQuery->limpiar(utf8_decode($_POST["nombre_firma"])); 
			$nombre_firma_post ='"'.$nombre_firma_post.'"';
			$puesto_post= $varQuery->limpiar(utf8_decode($_POST["puesto"])); 
			$puesto_post ='"'.$puesto_post.'"';
			$area_post= $varQuery->limpiar(utf8_decode($_POST["area"])); 
			$area_post ='"'.$area_post.'"';
			$departamento_post= $varQuery->limpiar(utf8_decode($_POST["departamento"])); 
			$departamento_post ='"'.$departamento_post.'"';
			$tel_post= $varQuery->limpiar(utf8_decode($_POST["tel"])); 
			$tel_post ='"'.$tel_post.'"';
			$ext_post= $varQuery->limpiar(utf8_decode($_POST["ext"])); 
			$ext_post ='"'.$ext_post.'"';
			$cel_post= $varQuery->limpiar(utf8_decode($_POST["cel"])); 
			$cel_post ='"'.$cel_post.'"';
			$correo_post= $varQuery->limpiar(utf8_decode($_POST["correo"])); 
			$correo_post ='"'.$correo_post.'"';

			$campos = $nombre_firma_post.",".$puesto_post.",".$area_post.",".$departamento_post.",".$tel_post.",".$ext_post.",".$cel_post.",".$correo_post; 
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
			    <p><input type="text" name="nombre_firma" value="<?php echo $nombre_firma ?>" placeholder="Nombre completo" required></p>
			    <p><input type="text" name="puesto" value="<?php echo $puesto ?>" placeholder="Puesto a desempeñar" required></p>
			    <p><input type="text" name="area" value="<?php echo $area ?>" placeholder="Área" required></p>
			    <p><input type="text" name="departamento" value="<?php echo $departamento ?>" placeholder="Departamento" required></p>
			    <p><input type="text" name="tel" value="<?php echo $tel ?>" placeholder="Teléfono"></p>
			    <p><input type="text" name="ext" value="<?php echo $ext ?>" placeholder="Extención"></p>
			    <p><input type="text" name="cel" value="<?php echo $cel ?>" placeholder="Celular DTI"></p>
			    <p><input type="text" name="correo" value="<?php echo $correo ?>" placeholder="Correo Electrónico"></p>
			  <?php }else{?>
			  	<p><input type="text" name="nombre_firma" value="" placeholder="<?php echo $nombre_firma ?>" required></p>
			    <p><input type="text" name="puesto" value="" placeholder="<?php echo $puesto ?>" required></p>
			    <p><input type="text" name="area" value="" placeholder="<?php echo $area ?>" required></p>
			    <p><input type="text" name="departamento" value="" placeholder="<?php echo $departamento ?>" required></p>
			    <p><input type="text" name="tel" value="" placeholder="<?php echo $tel ?>"></p>
			    <p><input type="text" name="ext" value="" placeholder="<?php echo $ext ?>"></p>
			    <p><input type="text" name="cel" value="" placeholder="<?php echo $cel ?>"></p>
			    <p><input type="text" name="correo" value="" placeholder="<?php echo $correo ?>" required></p>
			  <?php } ?>
			    <p class="submit"><input type="submit" name="Submit" value="Guardar"></p>
			  </form>
			</div>	
		</main>
	</div>

</body>
</html>

