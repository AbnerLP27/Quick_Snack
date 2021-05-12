<?php

require('../Config/config.php');

if(isset($_POST['submit'])){



	$desc = $_POST['descricao'];
	$preco = $_POST['preco'];
	$desconto = $_POST['desconto'];
	$descont = 0;

	if(isset($_POST['descont'])){ 

			$descont  =  1;
   }



   $cadastrarProd = array("descricao" => $desc,
						  "preco_venda" => $preco,
						  "max_desconto" => $desconto,
						  "descontinuado" => $descont);



   $produto = new Produtos();

   if($produto->cadastrarProduto($cadastrarProd)){


   		print "<script type='text/javascript'>
         
         		window.alert('Produto Cadastrado com sucesso!')
         
           </script> 
           <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=addProduto'> ";  

         //header('location: ../index.php?pagina=produto'); 

   }

}