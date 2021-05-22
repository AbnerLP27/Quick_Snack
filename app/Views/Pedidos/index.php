<?php

require('Config/config.php');


$pedidos = new Pedidos();
$allPed = $pedidos->consultarALLPed();



?>


<h1>Pedidos</h1>

<div class="container">
    
    <div class="menucontrollers">

        <a  href="?pagina=consultarPed">

            Consultar Pedido
        </a>
        <a  href="?pagina=novoPed">

            Registrar Pedido
        </a>

    </div>
    
	<table class="table">
	

	<thead>
		
		<tr>
			
			<th>Pedidos</th>
			<th>Data</th>
			<th>Situação</th>
			<th>Desconto</th>
			<th>Vendedor(a)</th>
			<th>Mesa</th>

		</tr>
	</thead>
	<tbody>
		
		
		<?php foreach ($allPed as $linha): ?>
		<tr>
			
			<td><?php echo $linha['cod_pedido']?></td>
			<td><?php echo $linha['data']?></td>
			<td><?php echo $linha['situacao']?></td>
            <td><?php echo $linha['desconto']?>%</td>
            <td><?php echo $linha['Vendedor(a)']?></td>
            <td><?php echo $linha['cod_mesa']?></td>

		</tr>
		<?php endforeach?>
		

	</tbody>


	</table>
</div>

