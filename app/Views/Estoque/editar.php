<?php


require_once('Config/Config.php');


$estoque = new Estoque();
$prodEtq = $estoque->obterLinha($_GET['editar']);

if(empty($prodEtq)){//Caso altere o editar na URL

	print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ?pagina=estoque'>
		<script type='text/javascript'>

         		window.alert('Estoque não encontrado. Tente Novamente.');
         		
        </script>"; 
	
	exit;

}

?>

<style type="text/css">
	
select{

	width: 270px;
	height: 30px;
	border-radius: 5px;
	cursor: pointer;


}


</style>
<h1>Editar Estoque</h1>

<div class="formulario">

	<form  method="POST" action="Controllers/EstoqueEditarController.php">
		
	    <fieldset>
		
			<legend>Informações do Produto em Estoque</legend>

				<select  name="prod" id="prod" required>

					<option  selected value="<?php print $prodEtq['cod_produto']?>">

						<?php print $prodEtq['descricao']?>

					</option>

				</select>

				<label>Quantidade</label>
		     	<input type="number" min="1" max="1000" required name="qtd" placeholder="1" class="input" value="<?php isset($prodEtq['quantidade']) ? print $prodEtq['quantidade'] : ''?>">
					
					
				<label for="preco">Mínimo</label>
				<input type="number" min="1" max="1000" required  placeholder="1" name="min" class="input"  value="<?php isset($prodEtq['minimo']) ? print $prodEtq['minimo'] : ''?>">

					
			
				<button class="botao" type="submit" name="submit">Editar Estoque</button>

		</fieldset>



	</form>

</div>
