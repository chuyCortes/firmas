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
	    public function sql($query){
	    	$queryProcess = $this->_db->query($query); 
	    	if($queryProcess==true){
	            if($queryProcess->num_rows>1){
	                while($row = $queryProcess->fetch_object()) {
	                   $resultSet[]=$row;
	                }
	            }elseif($queryProcess->num_rows==1){
	                if($row = $queryProcess->fetch_object()) {
	                    $resultSet=$row;
	                }
	            }else{
	                $resultSet=true;
	            }
	        }else{
	            $resultSet=false;
	        }
	         
	        return $resultSet;
    	}
	    
	}

?>