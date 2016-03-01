<?php
	/*
	Funciones para los querys 
	-ccortes DTI-
	*/
	require_once "conectar.php";
	class Querys extends Conectar
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function insertMas(){
			// LOAD DATA LOCAL INFILE 'abc.csv' INTO TABLE abc
			// FIELDS TERMINATED BY ',' 
			// ENCLOSED BY '"' 
			// LINES TERMINATED BY '\r\n'
			// IGNORE 1 LINES
			// (col1, col2, col3, col4, col5...);
		}

		public function ejecutarSql($id){
	        $result = $this->_db->query("select * from  datos_firmas where id_firma=".$id." ;"); 
         	$row = mysqli_fetch_array($result);
         	return $row;
         	$this->_db->close(); 
	    }

	    public function sql(){
	    	$result = $this->_db->query("select * from  datos_firmas limit 5;"); 
	    	
	    	while ($fila = mysqli_fetch_array($result)) 
	    	{
    			echo "<tr>";
    			echo "<td>".utf8_encode($fila["area"])."</td>";
    			echo "<td>".utf8_encode($fila["departamento"])."</td>";
    			echo "<td>".utf8_encode($fila["nombre_firma"])."</td>";
    			echo "<td>".utf8_encode($fila["puesto"])."</td>";
    			echo "<td>".utf8_encode($fila["tel"])."</td>";
    			echo "<td>".utf8_encode($fila["ext"])."</td>";
    			echo "<td><a onclick=\"funcionphp(".$fila['id_firma'].");\" class=\"icon-user\"></a></td>";
    			echo "<td><a onclick=\"modificarUser(".$fila['id_firma'].");\" ><div class=\"icon-cog\"></div></a></td>";
    			echo "<td><a id='".$fila['id_firma']."' class=\"icon-user-delete  delete\"></a></td>";
    			echo "</tr>";		
			}
	    }

	    public function paginacion(){
	    	$contador = $this->_db->query("select * from  datos_firmas");
	    	$num_rows = $contador->num_rows;
	    	//echo $num_rows."<br />";

	    	$tamano_pagina=2;
	    	$pagina = isset($_GET["pagina"]);
	    	if(!$pagina){
	    		$inico = $tamano_pagina;
	    		$pagina= 1;
	    	}else{
	    		$incio= ($pagina -1) * $tamano_pagina;
	    	}
	    	$total_paginas = ceil($num_rows/$tamano_pagina);
	    	//echo $total_paginas;

	    	$quer='select id_firma, nombre_firma from datos_firmas order by nombre_firma DESC limit'.' '.$inico;
	    	//echo $quer;
	     	$rs = $this->_db->query($quer);
			 while ($row = mysqli_fetch_array($rs)) {
   				echo "<tr>";
    			// echo "<td>".utf8_encode($row["area"])."</td>";
    			// echo "<td>".utf8_encode($row["departamento"])."</td>";
    			echo "<td>".utf8_encode($row["nombre_firma"])."</td>";
    			// echo "<td>".utf8_encode($row["puesto"])."</td>";
    			// echo "<td>".utf8_encode($row["tel"])."</td>";
    			// echo "<td>".utf8_encode($row["ext"])."</td>";
    			// echo "<td><a onclick=\"funcionphp(".$row['id_firma'].");\" class=\"icon-user\"></a></td>";
    			// echo "<td><a onclick=\"modificarUser(".$row['id_firma'].");\" ><div class=\"icon-cog\"></div></a></td>";
    			// echo "<td><a id='".$row['id_firma']."' class=\"icon-user-delete  delete\"></a></td>";
    			echo "</tr>";	
			}

			// if($total_paginas>1)
			// {
			// 	if($pagina != 1)
			// 		 echo '<a href="'.$url.'?pagina='.($pagina-1).'">s</a>';
			// 	for($i=1;$i<=$total_paginas;$i++){
			// 		if($pagina == $i)
			// 			echo $pagina;
			// 		else
			// 			echo '<a href="'.$url.'?pagina='.$i.'">'.$i.'</a>';
			// 	}
			// 	if($pagina != $total_paginas)
			// 		echo '<a href="'.$url.'?pagina='.($pagina+1).'">a</a>';
			// }
	    }


	    public function agregarUsuario($tabla , $campos){
	    	 $query= 'INSERT INTO'.' '.$tabla.'(nombre_firma,puesto,area,departamento,tel,ext)'.' '.'VALUES ('.$campos.');';
	    	 $result = $this->_db->query($query);
	    	if($result)
		    	echo "<script>console.log('jalo');</script>";
	    	else
		    	echo "<script>console.log('".$query."');</script>";
	    }

	    public function updateUsuario($tabla, $campos, $usuario){
	    	$arraycampos = explode("/",$campos);
	    	$query = 'UPDATE'.' '.$tabla.' '.'set nombre_firma='.$arraycampos[0].','.'puesto='.$arraycampos[1].','.'area='.$arraycampos[2].','.'departamento='.$arraycampos[3].','.'tel='.$arraycampos[4].','.'ext='.$arraycampos[5] .'where id_firma='.$usuario;
	    	//echo "<script>console.log('".$query."');</script>";
	    	$result = $this->_db->query($query);
	    	header('Location:home.php');
	    }

	}

?>