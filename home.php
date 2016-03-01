<!-- 
-ccortes- DTI 
-->
<!DOCTYPE html>
<html>
<head>
	<title>Creador de firmas DTI</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/table_home.css">
	<link rel="stylesheet" type="text/css" href="css/css/fontello.css">
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
			<h1 class="titulo">Sistema de Firmas DTI</h1>
            <div class="filtro">
                <p>filtro:</p>
                <form>
                    <label for="area">Área:</label>
                    <input id="area" type="text"></input>
                    <label for="depa">Departamento:</label>
                    <input id="depa" type="text"></input>
                    <label for="puesto">Puesto:</label>
                    <input id="puesto"type="text"></input>
                    <label for="firma">Nombre firma:</label>
                    <input id="firma"type="text"></input>
                    <input type="submit" name="Submit" value="buscar">
                </form>
            </div>
			<div class="button"> <a onclick="agregarUser();" class="icon-user-add"/></a></div>
			<div class="table_home" >
                <table >
                    <tr>
                        <td>
                            Área
                        </td>
                        <td>
                           Departamento
                        </td>
                        <td>
                           Nombre Firma
                        </td>
                        <td>
                            Puesto
                        </td>
                        <td>
                            Telefono
                        </td>
                        <td>
                            Extención
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <?php
						include 'core/querys.php';
						$varQuery = new Querys();
                        $var= $varQuery->paginacion() ;
					?>
                </table>
                
            </div>	
		</main>
	</div>

</body>
</html>