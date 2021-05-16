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

<h1>Produtos</h1>

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


