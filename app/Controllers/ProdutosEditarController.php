<?php

require('../Config/config.php');

if(isset($_POST['submit'])){


  $cod = $_POST['codigo'];
	$desc = $_POST['descricao'];
	$preco = $_POST['preco'];
	$desconto = $_POST['desconto'];
	$descont = 0;

	if(isset($_POST['descontinuado'])){ 

			$descont  =  1;
   }



   $editarProd = array("cod_produto" => $cod,
              "descricao" => $desc,
						  "preco_venda" => $preco,
						  "max_desconto" => $desconto,
						  "descontinuado" => $descont);




   $produto = new Produtos();

   if($produto->editarProduto($cod,$editarProd)){


   		print "<script type='text/javascript'>
         
         		window.alert('Produto Editado com sucesso!')
         
           </script> 
           <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=produto'> ";  

        

   }

}