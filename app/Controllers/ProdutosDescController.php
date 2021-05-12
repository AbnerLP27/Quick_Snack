<?php

require_once('../Config/config.php');


if(isset($_GET['id_prod'])){

	$id = $_GET['id_prod'];	

	$prod = new Produtos();

	@$prod->descProduto($id);


	header('location: ../index.php?pagina=produto');

}