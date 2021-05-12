<?php


require_once('Config/Config.php');


$estoque = new Estoque();
$prodSemEtq = $estoque->consultarProdSemEtq();


?>

<style type="text/css">
	
select{

	width: 270px;
	height: 30px;
	border-radius: 5px;
	cursor: pointer;


}


</style>

<div class="formulario">

<h1 >Novo Estoque</h1>

			


	<form  method="POST" action="Controllers/EstoqueRegistrarController.php">
		
	    <fieldset>
		
			<legend>Informações Produto Estoque</legend>

				<select required name="codigoProd">

					<option selected disabled value="">Selecione produto sem estoque......</option>

					<?php foreach($prodSemEtq as $linha):?>

					<option  name="codigoProd" value="<?php print $linha['cod_produto']?>">

						<?php print $linha['descricao']?>

					</option>

					<?php endforeach;?>
					
				</select>

				<label>Quantidade</label>
		     	<input type="number" min="1" max="1000" required name="qtd" placeholder="1" class="input">
					
					
				<label for="preco">Mínimo</label>
				<input type="number" min="1" max="1000" required  placeholder="1" name="min" class="input">

					
			
				<button id="botao" type="submit" name="submit">Novo Estoque</button>

		</fieldset>



	</form>

</div>
