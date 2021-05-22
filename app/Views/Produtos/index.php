<?php

require('Config/config.php');


$produtos = new Produtos();
$allProds = $produtos->consultarALLProd();



?>



<h1>Produtos</h1>

<div class="container">

	
	<div class="menucontrollers">

		<a href="?pagina=addProduto">
			Novo Produto
		</a>

	</div>
	
	<table class="table">
	

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
			
				<a class="btneditar" 
					href="?pagina=editarProduto&editar=<?php echo $linha['cod_produto'] ?>">	
					Editar
				</a>
			</td>
		</tr>
		<?php endforeach?>
		

	</tbody>


	</table>
</div>


