<?php

require('../Config/config.php');


$itensPedidos = new ItensPedido();

if(!isset($_POST['codped'])){


	$desc = $_POST['desconto'];
	$login = $_POST['login'];
	$mesa = $_POST['selectmesa'];


	/*==========[ Inserir Pedido ]=========*/
	$data = array("desconto" => $desc, 
				  "loginfun" => $login,
				  "cod_mesa" => $mesa);

	$ped = new Pedidos();

	/*[ Insert pedido e retorna a ID ]*/
	$cod = @$ped->registrarPedido($data);
	$cod = $cod[0]['cod_pedido'];


	$itensPedidosArray = itensArray($_POST['itens'], $cod);

	
	/*[ Inserir Todos os itens Pedido no dataBase]*/
	if ($itensPedidos->registrarItensPed($itensPedidosArray)){

    	print "<script type='text/javascript'>
         
         		window.alert('Pedido Guardado com Sucesso!')
         
          	 </script> 
          	 <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=pedidos'> ";
	} 

}else{
	

	$codped = $_POST['codped'];
	$newItensp = itensArray($_POST['itens'], $codped);

	/*[ Inserir Todos os itens Pedido no dataBase]*/
	if ($itensPedidos->registrarItensPed($newItensp)){

    	print "<script type='text/javascript'>
         
         		window.alert('Novo itens Pedidos adicionado no pedido.')
         
          	 </script> 
          	 <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=pedidos'> ";

	} 


}


	

function itensArray($itens,$cod){

	/*
		*Como não foi possível retonar um Array pronto,
		será preciso montar um com quantidade de itens pedido
		que será inserido no DataBase.
	*/
	$itens = explode(',',$itens);//função que separa string em uma array
	$itensPed;//Variável que armazena os arrays
	$itensP [] = $cod;//$cod[0]['cod_pedido'];//Amz o cod do pedido na 1º index


		
	$y =1;//Faz a contagem dos itens = 3

	for($i =0; $i < count($itens); $i++) {
		
		$itensP [] = $itens[$i];// info Itens: Cod Produto/ Qtd/ Preco

			if($y == 3){

				
					/*[Renoamear as colunas]*/
					$itensP['cod_pedido'] = $itensP[0];//0 -> cod_pedido
					unset($itensP[0]);

					$itensP['cod_produto'] = $itensP[1];//1 -> cod_produto
					unset($itensP[1]);

					$itensP['quantidade'] = $itensP[2];//2 -> quantidade
					unset($itensP[2]);

					$itensP['valor'] = $itensP[3];//3 -> valor
					unset($itensP[3]);


				 $itensPed [] = $itensP;//New Array
				 $itensP = null;
				 $itensP [] = $cod;//$cod[0]['cod_pedido'];//Cod Pedido 1º
				$y=1;

			}else{


				$y++;//2,3
			}
		}

		

		return $itensPed;


}

		