<!-- 
-ccortes- DTI 
-->
<?php 
    session_start();
    include 'core/querys.php';
    $varQuery = new Querys();
    if(empty($_SESSION['username'])) {
        header('Location: index.php');
        //echo "empty";
    }
    else{
        
    
?>
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
				<div id="cs"><a href="index.php">Cerrar Sesión</a></div>
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
                    <input type="submit" id="btn_buscar"  name="Submit" value="Buscar">
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
                            Celular
                        </td>
                        <td>
                            correo
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <?=$var= $varQuery->paginacion() ;?>
                </table>
            </div>
            <div class="paginador">
                    <?= $var= $varQuery->num_paginacion() ;?>
                </div>	
		</main>
	</div>

</body>
</html>
<?php 
    }
?>