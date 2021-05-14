<?php

require('Config/config.php');


$fun = new Funcionario();

$allFun = $fun->consultarALLFun();





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
	cursor: pointer;


}
	
</style>

<h2>Funcionários</h2>

<div class="container">

	

	<a id="newElement" href="?pagina=addfun">

		Cadastrar Funcionario
	</a>
	<table id="table">
	

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
				<a id="editar" href="?pagina=editarfun">
					Editar
				</a>
			</td>

		</tr>
		<?php endforeach;?>
		

	</tbody>


	</table>
</div>


