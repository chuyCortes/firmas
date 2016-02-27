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

		public function ejecutarSql(){
	        $result = $this->_db->query("select * from  datos_firmas;"); 
         	$row = mysqli_fetch_array($result);
         	return $row;
         	$this->_db->close(); 
	    }

	    public function sql(){
	    	$result = $this->_db->query("select * from  datos_firmas limit 5;"); 
	    	
	    	while ($fila = mysqli_fetch_array($result)) 
	    	{
    			// printf ("Área: %s Departamento: %s Nombre Firma: %s Puesto: %s ext: %s Telefono: %s<br/>", $fila["area"], $fila["departamento"], $fila["nombre_firma"], $fila["puesto"], $fila["ext"], $fila["tel"]);
    			echo "<tr>";
    			echo "<td>".utf8_encode($fila["area"])."</td>";
    			echo "<td>".utf8_encode($fila["departamento"])."</td>";
    			echo "<td>".utf8_encode($fila["nombre_firma"])."</td>";
    			echo "<td>".utf8_encode($fila["puesto"])."</td>";
    			echo "<td>".utf8_encode($fila["ext"])."</td>";
    			echo "<td>".utf8_encode($fila["tel"])."</td>";
    			echo "<td><a onclick=\"funcionphp(".$fila['id_firma'].");\" class=\"icon-user\"></a></td>";
    			echo "<td><div class=\"icon-cog\"></div></td>";
    			echo "<td><a id='".$fila['id_firma']."' class=\"icon-user-delete  delete\"></a></td>";
    			echo "</tr>";		
			}
	    }
	}

?>