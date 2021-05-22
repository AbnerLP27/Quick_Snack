<?php

require('Config/config.php');


$fun = new Funcionario();

$allFun = $fun->consultarALLFun();





?>



<h1>Funcionários</h1>

<div class="container">

	

	<div class="menucontrollers">
		
		<a  href="?pagina=addfun">

			Cadastrar Funcionario
		</a>

	</div>
	<table class="table">
	

	<thead>
		
		<tr>
			
			<th>#</th>
			<th>Nome</th>
			<th>Tel/Cel</th>
			<th>CEP</th>
			<th>Login</th>
			<th>Ativ/Desat</th>
			<th>Cargo</th>
			<th>Editar</th>


		</tr>


	</thead>
	<tbody>
		<?php $i=1;?>
		<?php foreach($allFun as $linha): ?>
		<tr>
			
			<td><?php echo  $i; $i++;?></td>
			<td><?php print $linha['nome'];?></td>
			<td><?php print $linha['tel_cel'];?></td>
			<td><?php print $linha['cep']; ?></td>
			<td><?php print $linha['login']; ?></td>
			<td>
				<input type="checkbox" name="ativado" 
				onclick="return desativar(<?php print $linha['ativado'];?>,
											<?php print $linha['cod_funcionario'];?>,
										  '<?php print $linha['nome'];?>')"

				<?php $linha['ativado'] > 0 ? print 'checked' : ''; ?>>

			</td>

			<td><?php print $linha['cargo']?></td>	
			<td>
				<a class="btneditar" 
				href="?pagina=editarfun&editar=<?php print $linha['cod_funcionario']?>">
					Editar
				</a>
			</td>

		</tr>
		<?php endforeach;?>
		

	</tbody>


	</table>
</div>


