<?php

require('../Config/config.php');

	$nome = $_POST['nome'];
	$cep = str_replace("-","",$_POST['cep']);
	$login = $_POST['loginFun'];
	$senha = $_POST['senha'];
	$atv = $_POST['ativado'] == "on" ? 1 : 0;
	$tel_cel = str_replace(array("(",")","-"," "),"",$_POST['tel_cel']);
	$cargo = $_POST['codigoCargo'];




$cadFunc = array("nome" => $nome,
				 "login" => $login,
				 "senha" => md5($senha),//Utilizando md5 para criptografar a senha
				 "cep" => $cep,
				 "tel_cel" => $tel_cel,
				 "ativado" => $atv,
				 "cod_cargo" => $cargo);



	

	$fun = new Funcionario();

	$teste = array("cep" => $cep);




$result = $fun->jaCadastradoFun($teste);



if(count($result) <= 0){

	if($fun->cadastrarFun($cadFunc)){

		print "<script type='text/javascript'>
         
         		window.alert('Funcionario: $nome Cadastrado com sucesso!')
         
           </script> 
           <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=addfun'> ";
	}

}else{


	print "<script type='text/javascript'>
         
         		window.alert('CEP: $cep informado já cadastrado. Tente novamente.');

         		window.history.back();
         
           </script>";

     exit;

}

