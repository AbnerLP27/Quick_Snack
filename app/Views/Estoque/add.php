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
<h1>Novo Estoque</h1>
<div class="formulario">


	<form  method="POST" action="Controllers/EstoqueRegistrarController.php">
		
	    <fieldset>
		
			<legend>Informações Produto Estoque</legend>

				<select required name="codigoProd">

					<option selected disabled value="">
						Selecione produto sem estoque......
					</option>

					<?php foreach($prodSemEtq as $linha):?>

					<option  name="codigoProd" 
							 value="<?php print $linha['cod_produto']?>">

						<?php print $linha['descricao']?>

					</option>

					<?php endforeach;?>
					
				</select>

				<label>Quantidade</label>
		     	<input type="number" min="1" max="999" required name="qtd" placeholder="0" class="input">
					
					
				<label for="preco">Mínimo</label>
				<input type="number" min="1" max="999" required  placeholder="0" name="min" class="input">

					
			
				<button class="botao" type="submit" name="submit">Novo Estoque</button>

		</fieldset>



	</form>

</div>
