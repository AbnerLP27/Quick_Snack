<?php  

require_once('../Config/config.php');


if(isset($_POST['submit'])){

	$prod = $_POST['prod'];
	$qtd = $_POST['qtd'];
	$min = $_POST['min'];


	$editarEtq = array("cod_produto" => $prod,
					   "quantidade" => $qtd,
					   	"minimo" => $min);

	$etq = new Estoque();

	if($etq->alterarProdEtq($prod, $editarEtq)){


			print "<script type='text/javascript'>
         
         		window.alert('Estoque editado com sucesso!')
         
           </script> 
           <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../index.php?pagina=estoque'> ";  

        
	}
}