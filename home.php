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
                <p>Búsqueda:</p>
                <form action="busqueda.php" method="post">
                    <table >
                        <tr>
                            <td>
                                <label for="area">Área:</label>
                            </td>
                            <td>
                                <input id="area"name="area" type="text"></input>
                            </td>
                            <td>
                                <label for="depa">Departamento:</label>
                            </td>
                            <td>
                                <input id="depa" name="depa" type="text"></input>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="puesto">Puesto:</label>
                            </td>
                            <td>
                                <input id="puesto" name="puesto" type="text"></input>
                            </td>
                            <td>
                                <label for="firma">Nombre firma:</label>
                            </td>
                            <td>
                                <input id="firma" name="firma" type="text"></input>
                            </td>
                            
                        </tr>
                    </table>
                    <input type="submit" id="btn_buscar"  name="Submit" value="buscar">
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
                            Teléfono
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
            <div class="paginador">
                    <?php 
                         $var= $varQuery->num_paginacion() ;
                    ?>
                </div>	
		</main>
	</div>

</body>
</html>