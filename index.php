<!--
	-ccortes- 
 -->
<?php
	 

	include 'core/querys.php';
	$varQuery = new Querys();
	error_reporting(0);
		

?>
 <!DOCTYPE html>
<html>
<head>
	<title>Creador de firmas DTI</title>
	<link rel="stylesheet" type="text/css" href="admin/css/user.css">
	<link rel="stylesheet" type="text/css" href="admin/css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="admin/css/css/fontello.css">
	<!-- <script src="script/home.js"></script> -->
	<style type="text/css">
	.footer{
		
		font-family: helvetica;
		text-align: center;
		font-size: 16px;
		color:  #404040;
		margin-top:30px;
	}
	.titulo{
		
	}
	.info{
		margin-top:100px;
		margin-left:280px;
		margin-bottom:180px;
	}
	#instrucciones{
		font-size: 16px;
		color:  #404040;
		font-family: helvetica;
		margin-top: 80px;
		margin-left:36%;
	}

	</style>
</head>
<body>
	<div class="contenedor">
		<head>
				<!-- <img style="float:left;margin:10px 7.5px;" src="img/logo_uanl.png"> -->
				<img style="float:left;margin:10px 25px;" src="img/logo_dti.png">
			<div id="Menu">

				<a href="index.php"><div class="icon-home h"></div></a>
			</div>
		</head>
		<main>
			<h1 class="titulo">
				Firmas DTI
			</h1>
			
			<?php

			if(isset($_POST['Submit'])){
				//$tar ='"'.$_POST["correo"].'"';
				$tar =$_POST["correo"];
				$tar .= "@uanl.mx"; 
			 	$tar = '"'.$tar.'"';
			 	$var= $varQuery->traerfirma($tar);
			 	if($var)
			 	{
			 	///
			 	?>
			 	<!--  -->
			 	<p class="footer">Copia la firma incluyendo los logos, posteriormente pégala en la sección de Firmas de tu Outlook.</p>
			 	<div class="info">
			 	<table  style="width: 480px;height:200px; overflow: hidden; box-sizing: border-box;border-collapse: collapse;">
					 <col style="width:37.5%">
						<tr>
							<td style="height:74.5%;padding-left:29px;padding-top:35px;">
								<img src="http://eventos.uanl.mx/dti_firmas/imagenes/logo_uanl.gif" alt="logo Uni" >
							</td>
							<td style="">
								<table  style="width:277px; border-left: 2px solid #626262; border-collapse:collapse; ">
									<tr>
										<td style="font-size: 12px;font-family: 'Myriad Pro',helvetica !important;color: #626262; padding-left:11px;padding-bottom:9px;">
											<b><?= utf8_encode($var[3])?></b><p style="height:-1px; margin:0; padding:0;"></p>
											<small><b><?= utf8_encode($var[4])?></b></small>
										</td>
									</tr>
									<tr>
										<td style="font-size: 12px;font-family: 'Myriad Pro',helvetica !important;color: #626262; padding-left:11px;padding-bottom:13px;">
											<small><?= utf8_encode($var[2])?></small><br>
											<small><?= utf8_encode($var[1])?></small><br>
											<small>Dirección de Tecnologías de Información</small>
										</td>
									</tr>
									<tr>
										<td style="font-size: 12px;font-family: 'Myriad Pro',helvetica !important;color: #626262;padding-left:11px;">
											<small>Tel. 52(81)83294040</small>
											<?php
												if(!empty($var[5]))
													echo"<small>, Ext: ".$var[5]."</small>"; 
												if(empty($var[6])|| $var[6] == "0")
												{
												}
												else{
													echo" "."<small>, Tel. Directo: ".$var[6]."</small>";
												}
											?>
											<br>
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
								<small style="color: #6da752;  font-size: 12px;font-family: 'Myriad Pro';">Imprime sólo  lo que  necesites.</small>
							</td>
						</tr>
				</table>
				</div>
				<!-- <br/>En caso de que su numero este en azul es por la configuración del navegador.</p>
 -->
			 	<!--  -->
			 <?php	
			 	///
			}
			else{
				echo "<h1 style='font-family:helvetica; color: #404040; margin-left:310px;margin-top:100px;'>No se encontró ninguna firma</h1>";
			}
			}else{
			?>
			<p id="instrucciones">Ingresa tu correo electrónico para generar tu firma.</p>
			<div class="login">

			  <form method="post" action="">
			    <p ><input  style="text-align:right !important; font-size:16px !important; " id="correo" type="text" name="correo" value="" placeholder="Correo Electrónico"required></p>
			    <label style='font-size:16px; color: #404040; font-family:helvetica;position: absolute;margin-left: 285px;margin-top: -35px;' for="correo">@uanl.mx</label>
			    <p class="submit" style="margin-left: 35px;"><input type="submit" name="Submit" value="Generar Firma"></p>
			  </form>
			</div>
			<?php
			 }?>
		</main>

	</div>
	<div style="margin: 0 auto; width: 1024px;">
		<footer>
			<p id="dti">DIRECCIÓN DE TECNOLOGÍAS DE INFORMACIÓN. <br /></p>
			<p>
				<a href="http://www.uanl.mx/">UNIVERSIDAD AUTÓNOMA DE NUEVO LEÓN</a> | 2016 <br />
				Pedro de Alba s/n, San Nicolás de Los Garza, Nuevo León</p>
		</footer>
	</div>
	
</body>
</html>

