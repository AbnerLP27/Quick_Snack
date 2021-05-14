<?php


class Pedidos extends DataBase {


	private $tabela = "pedidos";
	private $conn;


	public function __construct(){


		$this->conn = $this->connect();

	}


	/*
		[ cadastrar um Pedido ]
	*/
	public function cadastrarPedido($dados){

		return $this->conn->insert($this->tabela,$dados);


	} 

	/*
			[ Editar um Pedido ]		
	*/
	public function editarPedido($id, $dados){

		$db = $this->conn->where("cod_pedido",$id);
		return $db->update($this->tabela,$dados);

	}


	/*
		[ Abrir e fechar um pedido ]
	*/
	public function situacaoPedido($dados){
		
		return $this->conn->rawQuery("Select situacao",array($dados));
		 

		
	}


	/*
		[ Consultar todos os pedidos  ]	
	*/
	public function consultarALLPed(){


		return $this->conn->get('pedidos');//Editar tabela no banco


	}


	/*
		[ Obter uma linha da tabela de pedidos ]
	*/
	public function obterLinha($id){

		$db = $this->conn->where("cod_pedido",$id);
		return $db->getOne($this->tabela);

	}

}