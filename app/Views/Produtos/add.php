



<div class="formulario">

<h1 >Novo Produto</h1>

			


	<form  method="POST" action="Controllers/ProdutosCadastrarController.php">
		
	    <fieldset>
		
			<legend>Informações do Produto</legend>

				<label>Descrição</label>
		     	<input type="text" autofocus required name="descricao" placeholder="Descrição" class="input">
					
					
				<label for="preco">Preço de venda</label>
				<input type="number" step="any" min="0" max="1000" required  placeholder="R$ 00,00" name="preco" class="input">

					
				<label for="desconto">Desconto</label>
				<input type="number" step="any" min="0" max="1000" required placeholder="0%" name="desconto" class="input">

				<label for="descontinuado">
					<input type="checkbox"  name="descont" >
					
					Descontinuado
				</label>
					

				<button id="botao" type="submit" name="submit">Cadastrar</button>

		</fieldset>



	</form>

</div>