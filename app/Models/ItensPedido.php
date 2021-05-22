<?php


class ItensPedido extends DataBase{

	private $tabela = "itens_pedido";
	private $conn;


	public function __construct(){


		$this->conn = $this->connect();
	}


	public function registrarItensPed($dados){

		return $this->conn->insertMulti($this->tabela, $dados);

	}

	
	/*
		[ Consultar todos os Itens pedidos Selecionados ]	
	*/
	public function selectedItensPed($dado){


		return @$this->conn->rawQuery('call selected_itensped(?)', $dado);


	}

	/*
		[ Consultar todos os Itens pedidos  ]	
	*/
	public function selectItensPed(){


		return $this->conn->get('selectItemped');


	}

}