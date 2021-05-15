<?php

require('Config/config.php');


$pedidos = new Pedidos();
$allPed = $pedidos->consultarALLPed();



?>

<style type="text/css">

#botoes{
 	
}

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

<h2>Pedidos</h2>

<div class="container">
        <a id="newElement" href="?pagina=home">

            Consultar Pedido
        </a>
        <a id="newElement" href="?pagina=home">

            Registrar Pedido
        </a>
    
	<table id="table">
	

	<thead>
		
		<tr>
			
			<th>#</th>
			<th>Pedidos</th>
			<th>Data</th>
			<th>Situação</th>
			<th>Desconto</th>
			<th>Vendedor(a)</th>
			<th>Mesa</th>

		</tr>


	</thead>
	<tbody>
		
		<?php $i =1;?>
		<?php foreach ($allPed as $linha): ?>
		<tr>
			
			<td><?php echo $i; $i++; ?></td>
			<td><?php echo $linha['cod_pedido']?></td>
			<td><?php echo $linha['data']?></td>
			<td><?php echo $linha['situacao']?></td>
            <td><?php echo $linha['desconto']?>%</td>
            <td><?php echo $linha['nome']?></td>
            <td><?php echo $linha['cod_mesa']?></td>

		</tr>
		<?php endforeach?>
		

	</tbody>


	</table>
</div>

