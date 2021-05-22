<?php


class Pedidos extends DataBase {


	private $tabela = "pedidos";
	private $conn;


	public function __construct(){


		$this->conn = $this->connect();

	}


	/*
		[ Registrar um Pedido ]
	*/
	public function registrarPedido($dados){

		return $this->conn->rawQuery('call registrarped(?,?,?)',$dados);


	} 

	/*
		[ Consultar todos os pedidos do Dia ]	
	*/
	public function consultarALLPedDia(){


		return $this->conn->get('lista_pedidosDia');//Editar tabela no banco


	}

	/*
		[ Consultar todos os pedidos  ]	
	*/
	public function consultarALLPed(){


		return $this->conn->get('lista_pedidos');//Editar tabela no banco


	}






	

}