<?php
// header('Content-Type: text/html; charset=utf-8');
//    $mysqli = new mysqli("localhost", "root", "damian", "firma");
// if ($mysqli->connect_errno) {
//     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }
// else
// {
//     $sql = "select * from  datos_firmas";
//     $result = mysqli_query($mysqli, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     $row = mysqli_fetch_array($result);
//     echo '<table style="width: 480px;height:200px; overflow: hidden; box-sizing: border-box;border-collapse: collapse;">
// 		 <col style="width:37.5%">
// 			<tr>
// 				<td style="/*border:1px solid black;*/height:74.5%;padding-left:29px;padding-top:35px;">
// 					<img src="http://eventos.uanl.mx/dti_firmas/imagenes/logo_uanl.gif" alt="logo Uni" >
// 				</td>
// 				<td style="/*border:1px solid red;*/">
// 					<table  style="width:277px; border-left: 2px solid #626262; border-collapse:collapse; ">
// 						<tr>
// 							<td style="font-size: 12px;font-family: \'Myriad Pro\';color: #626262; padding-left:11px;padding-bottom:9px;">
// 								<b>'.utf8_encode($row[3]).'</b><p style="height:-1px; margin:0; padding:0;"></p>
// 								<small><b>'.utf8_encode($row[4]).'</b></small>
// 							</td>
// 						</tr>
// 						<tr>
// 							<td style="font-size: 12px;font-family: \'Myriad Pro\';color: #626262; padding-left:11px;padding-bottom:13px;">
// 								<small>Dirección de Tecnologías de Información</small>
// 							</td>
// 						</tr>
// 						<tr>
// 							<td style="font-size: 12px;font-family: \'Myriad Pro\';color: #626262;padding-left:11px;">
// 								<small>Tel. +52(81)8329 4040</small><br>
// 								<small>Cd. Universitaria, C.P. 66455, San Nicolás  de los Garza</small><br>
// 								<small>Nuevo León, México</small>
// 							</td>
// 						</tr>
// 					</table>
// 				</td>
// 			</tr>
// 			<tr>
// 				<td style="/*border:1px solid blue;*/ padding-left:40px;padding-bottom:5px;padding-top:5px;">
// 					<img  src="http://eventos.uanl.mx/dti_firmas/imagenes/logo_optimiza.gif" alt="logo optimiza">
// 				</td>
// 				<td style="/*border:1px solid orange;*/ padding-left:15px; padding-top:0;">
// 					<small style="color: #6da752;  font-size: 12px;font-family: \'Myriad Pro\';">Imprime sólo  lo que  necesites.</small>
// 				</td>
// 			</tr>
// 	</table>';
//     }
// else {
//     echo "0 results";
// }

// mysqli_close($mysqli);
// }
include 'core/querys.php';

$varQuery = new Querys();
//$varQuery->checaConexion();
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