<style type="text/css">
	
select {
	display: block;
	width: 110px;
	height: 30px;
	pointer-events: none;
	border-radius: 5px;


}
	
</style>
<div class="formulario">

<h1 >Lanchonete - Novo Mesa</h1>

			


	<form  method="POST" action="Controllers/MesaRegistrarController.php">
		
	    <fieldset>
		
			<legend>Informações da Mesa</legend>

				<label>Nº Mesa</label>
		     	<input type="text" required autofocus name="num_mesa" placeholder="Nº Mesa" class="input">
					
					
				<label for="preco">Status</label>

				<select name="escolha">
					<option>Disponível</option>
				</select>
				


				<button id="botao" type="submit" name="submit">Registrar Mesa</button>

		</fieldset>



	</form>

</div>