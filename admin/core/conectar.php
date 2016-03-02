<?php
	/*
	conexión con la db
	-ccortes DTI-
	*/
	 require_once 'config/database.php';
	class Conectar
	{	
		protected $_db;
		public function __construct(){
			$this->_db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			if($this->_db->connect_errno)
			{
				echo "Fallo al conectar mysql:".$this->_db->connect_error;
				return;
			}
			$this->_db->set_charset(DB_CHARSET);
			
		}
		
	}
?>