<!-- 
-ccortes- DTI 
-->
<!DOCTYPE html>
<html>
<head>
	<title>Creador de firmas DTI</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="script/home.js"></script>
</head>
<body>
	<div class="contenedor">
		<head>
			<div id="Menu">
				
			</div>
		</head>
		<main>
			<h1 id="titulo">Sistema de Firmas DTI</h1>
			<?php
				include 'core/querys.php';
				$varQuery = new Querys();
				$var= $varQuery->sql();
			?>	
		</main>
	</div>

</body>
</html>