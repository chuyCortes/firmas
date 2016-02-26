<!--
	php crea firma
	-ccortes- 
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
			<h1 id="titulo">Firmas DTI</h1>
			<?php
			include 'core/querys.php';
			$varQuery = new Querys();

			$var= $varQuery->ejecutarSql();
			echo '<table style="width: 480px;height:200px; overflow: hidden; box-sizing: border-box;border-collapse: collapse;">
					 <col style="width:37.5%">
						<tr>
							<td style="/*border:1px solid black;*/height:74.5%;padding-left:29px;padding-top:35px;">
								<img src="http://eventos.uanl.mx/dti_firmas/imagenes/logo_uanl.gif" alt="logo Uni" >
							</td>
							<td style="/*border:1px solid red;*/">
								<table  style="width:277px; border-left: 2px solid #626262; border-collapse:collapse; ">
									<tr>
										<td style="font-size: 12px;font-family: \'Myriad Pro\';color: #626262; padding-left:11px;padding-bottom:9px;">
											<b>'.utf8_encode($var[3]).'</b><p style="height:-1px; margin:0; padding:0;"></p>
											<small><b>'.utf8_encode($var[4]).'</b></small>
										</td>
									</tr>
									<tr>
										<td style="font-size: 12px;font-family: \'Myriad Pro\';color: #626262; padding-left:11px;padding-bottom:13px;">
											<small>Dirección de Tecnologías de Información</small>
										</td>
									</tr>
									<tr>
										<td style="font-size: 12px;font-family: \'Myriad Pro\';color: #626262;padding-left:11px;">
											<small>Tel. +52(81)8329 4040</small><br>
											<small>Cd. Universitaria, C.P. 66455, San Nicolás  de los Garza</small><br>
											<small>Nuevo León, México</small>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td style="/*border:1px solid blue;*/ padding-left:40px;padding-bottom:5px;padding-top:5px;">
								<img  src="http://eventos.uanl.mx/dti_firmas/imagenes/logo_optimiza.gif" alt="logo optimiza">
							</td>
							<td style="/*border:1px solid orange;*/ padding-left:15px; padding-top:0;">
								<small style="color: #6da752;  font-size: 12px;font-family: \'Myriad Pro\';">Imprime sólo  lo que  necesites.</small>
							</td>
						</tr>
				</table>';
			?>
		</main>
	</div>

</body>
</html>
