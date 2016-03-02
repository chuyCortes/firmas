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

	    public function sql($query){
	    	$result = $this->_db->query("$query"); 
	    	
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
	    	
	    	$result = $this->_db->query($query);
	    	header('Location:home.php');
	    }

	    public function eliminaUsurio($tabla , $id){
	    	$query ='UPDATE'.' '.$tabla.' '.'set estado= 0 where id_firma='.$id ;
	    	$result = $this->_db->query($query);
	    	header('Location:home.php');
	    }

	    public function checarquery($query){
	    	echo "<script>console.log('".$query."');</script>";
	    }

	    /*paginacion*/
	    function contar_contenido($tamano)
	    {
	    	$contador = $this->_db->query("select * from  datos_firmas where estado = 1");
	    	$num_rows = $contador->num_rows;
	    	$total_paginas = ceil($num_rows / $tamano);
	    	return $total_paginas;	
	    }

	    function mostrar_contenido($min, $max){
	    	$quer='select * from datos_firmas where estado= 1 order by nombre_firma  limit'.' '.$min.','.$max;
	     	$rs = $this->_db->query($quer);
			 while ($row = mysqli_fetch_array($rs)) {
   				echo "<tr>";
    			echo "<td>".utf8_encode($row["area"])."</td>";
    			echo "<td>".utf8_encode($row["departamento"])."</td>";
    			echo "<td>".utf8_encode($row["nombre_firma"])."</td>";
    			echo "<td>".utf8_encode($row["puesto"])."</td>";
    			echo "<td>".utf8_encode($row["tel"])."</td>";
    			echo "<td>".utf8_encode($row["ext"])."</td>";
    			echo "<td><a onclick=\"funcionphp(".$row['id_firma'].");\" class=\"icon-user\"></a></td>";
    			echo "<td><a onclick=\"modificarUser(".$row['id_firma'].");\" ><div class=\"icon-cog\"></div></a></td>";
    			echo "<td><a id='".$row['id_firma']."' class=\"icon-user-delete  delete\"></a></td>";
    			echo "</tr>";	
			}
	    }

      	public function paginacion(){
	    	$tamano_pagina = 10;

	    	$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : '';
	    	// $pagina = $_GET["pagina"];
	    	if(!$pagina)
	    	{
	    		$inicio=0;
	    		$pagina=1;
	    	}
	    	else
	    	{
	    		$inicio = ($pagina-1)* $tamano_pagina;
	    	}
	    	$total_paginas =$this->contar_contenido($tamano_pagina);
	    	$this->mostrar_contenido($inicio,$tamano_pagina);
	    	if($total_paginas > 1)
	    	{
	    		for($i=1;$i<=$total_paginas;$i++){
	    			if($pagina == $i)
	    				echo $pagina . " ";
	    			else
	    				echo "<a href='home.php?pagina=" . $i."'>" . $i . "</a> ";
	    		}
	    	}
	    	
	    }

	    public function filtro($columan,$nombres){
	    	$arraycampos = explode(":",$columan);
	    	$arraynombres = explode(":",$nombres);
	    	
	    	if(!empty(($arraycampos[0])))
	    		//$where .="puesto LIKE \"%".$arraycampos[0]."%\"  ";
	    		$where.="instr(puesto,\"". $arraycampos[0] ."\") and ";
	    	if(!empty(($arraycampos[1])))
	    		//$where.="departamento LIKE \"%".$arraycampos[1]."%\"  ";
	    		$where.="instr(departamento,\"". $arraycampos[1] ."\") and ";
	    	if(!empty(($arraycampos[2])))
	    		//$where.="nombre_firma LIKE \"%".$arraycampos[2]."%\"  ";
	    		$where.="instr(nombre_firma,\"". $arraycampos[2] ."\") and ";
	    	if(!empty(($arraycampos[3])))
	    		//$where.="area LIKE \"%".$arraycampos[3]."%\" and";
	    		$where.="instr(area,\"". $arraycampos[3] ."\") and  ";
	    	
	    	if(!empty($where))
	    		
	    		//$where ="and ".substr($where,0,-4);

	    	$sql="select * from datos_firmas where  ".$where." estado = 1";
	    	$check = $this->sql($sql);
	    	return $check;
	    }


	}

?>