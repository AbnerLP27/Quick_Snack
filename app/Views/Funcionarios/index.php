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

	

	<a id="newElement" href="?pagina=addFuncionario">

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
				<a id="editar">
					Editar
				</a>
			</td>

		</tr>
		<?php endforeach;?>
		

	</tbody>


	</table>
</div>
<script type="text/javascript">
	
	function desativar(atv, codFun, nome){

		var escolha;

		if(atv == 1){


			escolha = confirm("Desativar o acesso do funcionário "+nome+" ?");
		
			if(escolha){

				location.href = '../../app/Controllers/FunDesativarController.php?id_fun='+codFun;
				alert("Funcionário "+nome+" desativado com sucesso!");
			}

			return escolha;

		}else if(atv==0){


			escolha = confirm("Ativar o acesso do funcionário "+nome+" ?");

			if(escolha){

				location.href = '../../app/Controllers/FunDesativarController.php?id_fun='+codFun;

				alert("Funcionário "+nome+" ativado com sucesso!");

			}

			return escolha; 
		}

		

	}

</script>

