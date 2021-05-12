<?php

require_once('../Config/config.php');


	if(isset($_GET['id_fun'])){

		
		$codFun = $_GET['id_fun'];



		$fun = new Funcionario();

		@$fun->desativarFun($codFun);


		header('location: ../index.php?pagina=funcionario');
	}


