<?php


class Funcionario extends DataBase {

	private $tabela = "Funcionario";
	private $conn;


	public function __construct(){

		$this->conn = $this->connect();

	}


	public function cadastrarFun($dados){



	}


	public function alterarFun($id, $dados){



	}


	public function desativarFun($dados){

		return $this->conn->rawQuery("Select desativarFun(?)",array($dados));

	}


	public function login($dados){


		return @$this->conn->rawQuery("call login(?,?)",$dados);


	}



	public function jaCadastradoFun($cep){




	}


	public function consultarALLFun(){

		return $this->conn->get('lista_funcionario');

	}





}