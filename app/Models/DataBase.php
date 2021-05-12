<?php


	require_once('DB/MysqliDb.php');



class DataBase{



	protected $db;

	/*[ CRIAR A CONEXÃO COM O BANCO DE DADOS ]*/
	public function connect(){

		$database = new MysqliDb('localhost', 'root', '', 'quick_snack');

		if (!$database->connect()) {//Se não conectado
			
			$this->db = $database;
			return $this->db;
			
		}else{


			echo "Error connect in DataBase.";
		}
	}
}