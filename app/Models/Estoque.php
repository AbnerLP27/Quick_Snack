<?php

class Estoque extends DataBase {


	private $tabela = "Estoque";
	private $conn;

	public function __construct(){


		$this->conn = $this->connect();

	}


	public function cadProdEtq($dados){


		return	$this->conn->insert($this->tabela, $dados);

	}

	public function alterarProdEtq($id, $dados){


		$db = $this->conn->where("cod_produto",$id);
		return $db->update($this->tabela,$dados);

	}



	public function consultarALLProdEtq(){

		return $this->conn->get('lista_estoque');

	}

	public function consultarProdSemEtq(){

		return $this->conn->get('prod_semestoque');

	}


	public function obterLinha($id){

		$db = $this->conn->where("cod_produto",$id);
		return $db->getOne('lista_estoque');
	}



} 