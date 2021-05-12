<?php


class Mesa extends DataBase{

	private $tabela = "mesa";
	private $conn;


	public function __construct(){

		$this->conn = $this->connect();


	}


	public function registrarMesa($dados){

		return $this->conn->insert($this->tabela, $dados);

	}

	public function getAllMesas(){

		return $this->conn->get($this->tabela);
	}



}