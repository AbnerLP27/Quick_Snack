<?php


class Funcionario extends DataBase {

	private $tabela = "Funcionario";
	private $conn;


	public function __construct(){

		$this->conn = $this->connect();

	}


	public function cadastrarFun($dados){

		return $this->conn->insert($this->tabela,$dados);
	}


	public function alterarFun($id, $dados){

		$db = $this->conn->where('cod_funcionario',$id);
		return $db->update($this->tabela, $dados);

	}


	public function desativarFun($dados){

		return $this->conn->rawQuery("Select desativarFun(?)",array($dados));

	}


	public function login($dados){


		return @$this->conn->rawQuery("call login(?,?)",$dados);


	}



	public function jaCadastradoFun($dados){


		return @$this->conn->rawQuery("call funJaCadastrado(?)", $dados);

	}


	public function consultarALLFun(){

		return $this->conn->get('lista_funcionario');

	}


	public function obterLinha($id){

		$db = $this->conn->where("cod_funcionario",$id);
		return $db->getOne("lista_funcionario");

	}



}