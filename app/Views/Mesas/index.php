<?php

require('Config/config.php');

$mesa = new Mesa();

$allMesas = $mesa->getAllMesas();



?>
<h1>Lanchonete - Mesas</h1>


<div class="container">

	

	<div class="menucontrollers">

		<a href="?pagina=addMesa">

			Nova Mesa
		</a>

	</div>
	
	<table class="table">
	

	<thead>
		
		<tr>
			
			<th>Nº da Mesa</th>
			<th>Situação</th>

		</tr>


	</thead>
	<tbody>
		<!-- [cod_mesa] => 1 [status] => Disponível -->


		<?php foreach($allMesas as $linha):?>
		<tr>
			<td><?php echo $linha['cod_mesa'];?></td>
			<td><?php echo $linha['status'];?></td>
		</tr>
	<?php endforeach;?>
		
	
		

	</tbody>


	</table>
</div>
