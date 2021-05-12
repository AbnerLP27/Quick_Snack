<?php


class Produtos extends DataBase {


	private $tabela = "produto";
	private $conn;


	public function __construct(){


		$this->conn = $this->connect();

	}


	/*
		[ cadastrar um Produto ]
	*/
	public function cadastrarProduto($dados){

		return $this->conn->insert($this->tabela,$dados);


	} 

	/*
			[ Editar um Produto ]		
	*/
	public function editarProduto($id, $dados){

		$db = $this->conn->where("cod_produto",$id);
		return $db->update($this->tabela,$dados);

	}


	/*
		[ Descontinuar/Continuar um produto ]
	*/
	public function descProduto($dados){
		
		return $this->conn->rawQuery("Select desconProd(?)",array($dados));
		 

		
	}


	/*
		[ Consultar todos os produtos  ]	
	*/
	public function consultarALLProd(){


		return $this->conn->get('lista_produto');//Editar tabela no banco


	}


	/*
		[ Obter uma linha da tabela de produtos ]
	*/
	public function obterLinha($id){

		$db = $this->conn->where("cod_produto",$id);
		return $db->getOne($this->tabela);

	}

}