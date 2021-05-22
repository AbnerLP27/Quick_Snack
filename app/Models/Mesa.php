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

	/*[ Selecionar Mesa ]*/
	public function selectMesa($params){

		return @$this->conn->rawQuery("call selectmesa(?)",$params);
	}

	/*[ Selecionar Todas as Mesas ]*/
	public function getAllMesas(){

		return $this->conn->get('lista_allmesa');
	}


	/*[ Selecionar Mesas InDisponíveis ]*/
	public function getAllMesasInd(){

		return $this->conn->get('lista_mind');
	}



	/*[ Selecionar Mesas Disponíveis ]*/
	public function getAllMesasDis(){

		return $this->conn->get('lista_mesa');
	}





}