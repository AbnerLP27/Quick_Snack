<style type="text/css">
	
select {
	display: block;
	width: 110px;
	height: 30px;
	pointer-events: none;
	border-radius: 5px;


}
	
</style>

<h1>Lanchonete - Novo Mesa</h1>
<div class="formulario">

	<form  method="POST" action="Controllers/MesaRegistrarController.php">
		
	    <fieldset>
		
			<legend>Informações da Mesa</legend>

				<label>Nº Mesa</label>
		     	<input type="text" required autofocus name="num_mesa" placeholder="Nº Mesa" class="input">
					
					
				<label for="preco">Status</label>

				<select name="escolha">
					<option>Disponível</option>
				</select>
				


				<button class="botao" type="submit" name="submit">Registrar Mesa</button>

		</fieldset>



	</form>

</div>