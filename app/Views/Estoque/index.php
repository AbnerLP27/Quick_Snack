<?php
	
	require('Config/config.php');

	$est = new Estoque();
	$estqAll = 	$est->consultarALLProdEtq();



?>


<h1>Estoque</h1>


<div class="container">

	

	<div class="menucontrollers">

		<a  href="?pagina=addEstoque">

			Novo Estoque
		</a>

	</div>
	<table class="table">
	

	<thead>
		
		<tr>
			<th>#</th>
			<th>Produto</th>
			<th>Quantidade</th>
			<th>Mínimo</th>
			<th>Data de Cadastro</th>
			<th>Editar</th>

		</tr>


	</thead>
	<tbody>
		<!-- [cod_mesa] => 1 [status] => Disponível -->


		<?php $i =1;?>
		<?php foreach ($estqAll as $linha): ?>
		<tr>
			<td><?php echo $i; $i++; ?></td>
			<td><?php echo $linha['descricao'];?></td>
			<td><?php echo $linha['quantidade'];?></td>
			<td><?php echo $linha['minimo'];?></td>
			<td><?php echo $linha['data_cad']?></td>
			<td>
				<a class="btneditar" 
					href="?pagina=editarEstoque&editar=<?php echo $linha['cod_produto'] ?>">

					Editar

				</a>
			</td>
		</tr>
	<?php endforeach;?>
		
	
		

	</tbody>


	</table>
</div>
