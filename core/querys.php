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
		
		public function ejecutarSql(){
	        $result = $this->_db->query("select * from  datos_firmas;"); 
         	$row = mysqli_fetch_array($result);
         	return $row;
         	$this->_db->close(); 
	    } 
	    public function sql(){
	    	$result = $this->_db->query("select * from  datos_firmas;"); 
	    	
	    	while ($fila = mysqli_fetch_array($result)) 
	    	{
    			printf ("ID: %s  Área: %s Departamento: %s Nombre Firma: %s Puesto: %s ext: %s Telefono: %s<br/>", $fila["id_firma"], $fila["area"], $fila["departamento"], $fila["nombre_firma"], $fila["puesto"], $fila["ext"], $fila["tel"]);		
			}
	    }
	    
	}

?>