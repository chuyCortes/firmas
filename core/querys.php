<?php
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
	    } 
	}

?>