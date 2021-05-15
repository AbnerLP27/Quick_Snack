<?php

require('Config/path.php');
/*[ Estrutura modularizada ]*/


/*
	. A página principal index.php inclui(Include) todas as outras 
		páginas em um único arquivo.

		Assim todos os demais documento que componhe a estrura html
		serão carregados juntos


*/


session_start();





if(isset($_SESSION['logado'])){//se existe Logado

	if($_SESSION['logado'] == true){//se está logado

	

		#CABEÇALHO
		include 'header.php';

		#CONTEÚDO DA PÁGINA
		if(isset($_GET['pagina'])){/*Verificar se a variável página existe na url*/

			$pagina = $_GET['pagina'];

		}else{/*Se não existe*/

			$pagina = 'home';
		}

		if($_SESSION['cargo'] == "Gerente")://Se Gerente
		switch ($pagina) {

			case 'home':include VIEWS.'home.php';break;
			case 'pedidos':include 'Views/Pedidos/index.php';break;
			case 'produto': include	PRODUTOS.'index.php'; break;
			case 'addProduto': include	PRODUTOS.'add.php'; break;
			case 'editarProduto': include PRODUTOS.'editar.php'; break;
			case 'mesa': include MESA.'index.php'; break;
			case 'addMesa': include MESA.'add.php'; break;
			case 'estoque': include ESTOQUE.'index.php'; break;
			case 'addEstoque': include ESTOQUE.'add.php'; break;
			case 'editarEstoque': include ESTOQUE.'editar.php'; break;
			case 'funcionario':include FUNCIONARIO.'index.php';break;
			case 'addfun':include FUNCIONARIO.'add.php';break;
			case 'editarfun':include FUNCIONARIO.'editar.php';break;
	

			default: include 'Views/home.php';break;
		}
		elseif($_SESSION['cargo'] == "Vendedor(a)")://Se vendedor(a)
		switch ($pagina) {

			case 'home':include 'Views/home.php';break;
			case 'pedidos':include 'Views/Pedidos/index.php';break;
			
			default: include 'Views/home.php';break;
		}
		endif;

		#RODAPÉ
		include 'footer.php';
	}

}else{

	header('location: ../index.php');

}


