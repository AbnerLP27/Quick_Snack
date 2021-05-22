<?php

require('Config/config.php');


$pedidos = new Pedidos();

$allPed = $pedidos->consultarALLPedDia();

?>


<h1>Pedidos do Dia</h1>

<div class="listPeds">
	

<?php if(!empty($allPed)):?>

	<?php foreach($allPed as $linha):?>
	<ul class="listaped">
		
		<li>Pedido: <?php print $linha['cod_pedido']?></li>
		<li>Data: <?php print $linha['data']?></li>
		<li>Situacão: Aberto</li>
		<li>Desconto: <?php print $linha['desconto']?>%</li>
		<li>Vendedor(a): <?php print $linha['Vendedor(a)']?></li>
		<li>Mesa: <?php print $linha['cod_mesa']?></li>
	</ul>
	<?php endforeach;?>
<?php else:?>

	<ul class="listaped">
		
		<li>Nenhum Pedido Encontrado</li>
		
	</ul>

<?php endif;?>

</div>