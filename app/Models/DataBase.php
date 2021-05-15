<?php

	
	require_once('DB/MysqliDb.php');



class DataBase{



	protected $db;

	/*[ CRIAR A CONEXÃO COM O BANCO DE DADOS ]*/
	public function connect(){

		try{
			
			$database = new MysqliDb(HOST, USER, PASS, DBNAME);

			if (!@$database->connect()) {//Se não conectado
			
				$this->db = $database;
				return $this->db;
			
			}
			
		}catch(Exception $ex){


			
			print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../../index.php'> 

         	<script type='text/javascript'>

         		window.alert('Sem conexão com o DataBase. Entre em contato com a Central Quick Snack para obter mais informações.')

        	 </script> ";   

         exit;
		}




	}
}