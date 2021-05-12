<?php

require('../Config/config.php');


if(isset($_POST)){

	//var_dump($_POST);

	$num = $_POST['num_mesa'];
	$esc = $_POST['escolha'];


	$registrarDados = Array("cod_mesa" => $num,
							"status" => $esc);


	$mesa = new Mesa();

	if($mesa->registrarMesa($registrarDados)){


		print "<script type='text/javascript'>
         
         		window.alert('Mesa Registrada com sucesso!')
         
           </script> 
           <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=addMesa'> ";
           
	}else {

		print "<script type='text/javascript'>
         
         		window.alert('A Mesa já está Registrada, tente novamente.')
         
           </script> 
           <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=addMesa'> ";
	}

}