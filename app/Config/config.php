<?php


/*=============[ Carregar Classes ]================*/

date_default_timezone_set('America/Sao_Paulo');


//Inicando o carregamento das classes do Projeto
spl_autoload_register(function($nome_classe){


	$nome_arquivo = Models.DIRECTORY_SEPARATOR.$nome_classe.".php";
	

	if(file_exists($nome_arquivo)){

		require_once($nome_arquivo);
	}

});


define("Models",dirname(__DIR__).DIRECTORY_SEPARATOR.'Models');
