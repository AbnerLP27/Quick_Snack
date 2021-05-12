<?php


/*[ Estrutura modularizada ]*/


/*
	. A página principal index.php inclui(Include) todas as outras 
		páginas em um único arquivo.

		Assim todos os demais documento que componhe a estrura html
		serão carregados juntos


*/


session_start();





#CABEÇALHO
include 'header.php';






#CONTEÚDO DA PÁGINA
	if(isset($_GET['pagina'])){/*Verificar se a variável página existe na url*/

		$pagina = $_GET['pagina'];

	}else{/*Se não existe*/

		$pagina = 'home';
	}


	switch ($pagina) {

	case 'home':include 'Views/home.php';break;
	case 'produto': include	'Views/Produtos/index.php'; break;
	case 'addProduto': include	'Views/Produtos/add.php'; break;
	case 'editarProduto': include 'Views/Produtos/editar.php'; break;
	case 'mesa': include 'Views/Mesas/index.php'; break;
	case 'addMesa': include 'Views/Mesas/add.php'; break;
	case 'estoque': include 'Views/Estoque/index.php'; break;
	case 'addEstoque': include 'Views/Estoque/add.php'; break;
	case 'editarEstoque': include 'Views/Estoque/editar.php'; break;
	case 'funcionario':include 'Views/Funcionarios/index.php';break;
	

	default: include 'Views/home.php';break;
}




#RODAPÉ
include 'footer.php';