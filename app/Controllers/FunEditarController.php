<?php


require('../Config/config.php');


	$id = $_POST['idFun'];
	$nome = $_POST['nome'];
	$cep = str_replace("-","",$_POST['cep']);
	$login = $_POST['loginFun'];
	$senha = $_POST['senha'];
	$tel_cel = str_replace(array("(",")","-"," "),"",$_POST['tel_cel']);
	$cargo = $_POST['codigoCargo'];

	if(isset($_POST['ativado'])){

		$atv = $_POST['ativado'] == "on" ? 1 : 0;
	}else{

		$atv = 0;
	}



$cadFunc = array("nome" => $nome,
				 "login" => $login,
				 "senha" => $senha,
				 "cep" => $cep,
				 "tel_cel" => $tel_cel,
				 "ativado" => $atv,
				 "cod_cargo" => $cargo);





	$fun = new Funcionario();

	



if($fun->alterarFun($id,$cadFunc)){

		print "<script type='text/javascript'>
         
         		window.alert('Funcionario: $nome Editado com sucesso!')
         
           </script> 
           <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=funcionario'> ";
	

}