<?php

require_once('../Config/config.php');


if(isset($_POST['submit'])){


	

	$cod_produto = $_POST['codigoProd'];
	$quantidade = $_POST['qtd'];
	$minimo = $_POST['min'];

	


	$registrarEstq = array("cod_produto" => $cod_produto,
						   "quantidade" => $quantidade,
						   "minimo" => $minimo,
						    "data_cad" => date('Y-m-d'));

	$etq = new Estoque();

 	if($etq->cadProdEtq($registrarEstq)){


			print "<script type='text/javascript'>
         
         		window.alert('Estoque Cadastrado com sucesso!')
         
           </script> 
           <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=addEstoque'> ";   
	}
}