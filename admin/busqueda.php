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
                <a href="home.php"><div class="icon-home h"></div><a/>
            </div>
		</head>
		<main>
			<h1 class="titulo">Sistema de Firmas DTI</h1>
                <?php
                error_reporting(0);
                    include 'core/querys.php';
                    $varQuery = new Querys();
                    
                    if($_POST["Submit"])    
                    {
                        $area = isset($_POST["area"]) ? $_POST["area"] : '';
                        $depa = isset($_POST["depa"]) ? $_POST["depa"] : '';
                        $firma = isset($_POST["firma"]) ? $_POST["firma"] : '';
                        $puesto = isset($_POST["puesto"]) ? $_POST["puesto"] : '';
                        $arrayValores = $puesto.":".$depa.":".$firma.":".$area;
                        $arrayCampos = "puesto:departamento:nombre_firma:area";

                        if(empty($area)&& empty($depa) && empty($firma) && empty($puesto)){
                            echo "<h1 class='titulo'>No se encontro información</h1>";
                        }
                        else
                        { ?>
                                <div class="table_home" >
                                    <table>
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
                                        <?php $varQuery ->filtro($arrayValores,$arrayCampos)?>
                                    </table>
                                    </div>
                      <?php  }
                            

                    }
                      
                ?>
               
		</main>
	</div>

</body>
</html>

 <!-- echo $varQuery ->filtro($arrayValores,$arrayCampos); -->