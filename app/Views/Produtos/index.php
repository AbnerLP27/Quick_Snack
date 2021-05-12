<?php

require('Config/config.php');


$produtos = new Produtos();
$allProds = $produtos->consultarALLProd();



?>

<style type="text/css">
	
#editar{

	text-decoration: none;
	border: 2px solid black; 
	border-radius: 5px;
	background-color: #ca0035;
	color: white;
	padding: 5;
	font: 13px verdana;


}
	
</style>

<h2>Produtos</h2>

<div class="container">

	

	<a id="newElement" href="?pagina=addProduto">

		Novo Produto
	</a>
	<table id="table">
	

	<thead>
		
		<tr>
			
			<th>#</th>
			<th>Descrição</th>
			<th>Preço de venda</th>
			<th>Max desconto</th>
			<th>Desc/Cont</th>
			<th>Editar</th>

		</tr>


	</thead>
	<tbody>
		
		<?php $i =1;?>
		<?php foreach ($allProds as $linha): ?>
		<tr>
			
			<td><?php echo $i; $i++; ?></td>
			<td><?php echo $linha['descricao']?></td>
			<td>R$ <?php echo $linha['preco_venda']?></td>
			<td><?php echo $linha['max_desconto']?>%</td>

			<td>
				
				<input type="checkbox" 
				onclick="return desc(<?php echo $linha['cod_produto']?>,
									<?php echo $linha['descontinuado']?>,
									'<?php echo $linha['descricao']?>');"

				<?php  $linha['descontinuado'] == 1 ? print "checked" : '' ?>>

			</td>

			<td>
			
				<a id="editar" 
					href="?pagina=editarProduto&editar=<?php echo $linha['cod_produto'] ?>">	
					Editar
				</a>
			</td>
		</tr>
		<?php endforeach?>
		

	</tbody>


	</table>
</div>


<script type="text/javascript">


	function desc(id, descon, descricao){//Função em JavaScript para descontinuar/Continuar Prod

		if(descon == 0){//O produto está continuado

			var esc = confirm("Descontinuar "+descricao+" ?");//Descontinuar produto Sim/Não

			if(esc){//true
				
			

				location.href = '../../app/Controllers/ProdutosDescController.php?id_prod='+id;
				alert("Produto "+descricao+" descontinuado com sucesso! ");

			}

			return esc;

		}else if(descon == 1){//O produto está descontinuado

			var esc = confirm("Continuar "+descricao+" ?");//Continuar Produto Sim/Não

			if(esc){

				location.href = '../../app/Controllers/ProdutosDescController.php?id_prod='+id;
				alert("Produto "+descricao+" está continuado com sucesso! ");
			}

			return esc;
		}
		
	}

</script>
