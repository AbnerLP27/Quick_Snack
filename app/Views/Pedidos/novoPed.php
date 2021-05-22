<?php

require('Config/config.php');

$mesa = new Mesa();
$itens = new ItensPedido();

$ms =	$mesa->getAllMesasDis();/*Talvez chegue um momento que não tenha mais mesas*/

$itensped = $itens->selectItensPed();//Produtos

$arrayjs = json_encode($itensped);//Retorna a string contendo a representação JSON de um value.



?>

	<script type="text/javascript" src="Assets/JavaScript/javaped.js"></script>

<h1>Novo Pedido</h1>

<div class="formulario">
	


<div class="formularioPed">
	
	<form class="formPed" method="POST" id="formPed"  
		  action="Controllers/novoPedController.php">
	
	<fieldset>
		
		<legend>Informações do Pedido</legend>

		<div id="esquerda">
			
			<input type="hidden" 
			value="<?php isset($_GET['itemped']) ? print $_GET['itemped'] : ''?>" 
			<?php isset($_GET['itemped']) ? '' : print 'disabled'?>	
			name="codped">

			<label>Data</label>
			<input type="text" readonly 
			value="<?php print date("d/m/Y"); ?>" class="input" required>	

			<label for="desconto">Desconto</label>
			<input type="number" step="any" min="0" max="1000" placeholder="0%" id="desconto" name="desconto" class="input" 
			value="<?php isset($_GET['itemped']) ? print str_replace('%','',$_GET['desc']) : ''?>" required >

			<label>Vendedor(a)</label>
			<select class="selectped" id="selectfun" name="login" required>

				
				<option value="<?php   isset($_GET['itemped']) ? 

							print $_GET['log'] : print $_SESSION['login']; ?>">

					
					<?php   isset($_GET['itemped']) ? 
							print $_GET['log'] : print $_SESSION['login']; ?>
				
				</option>

			</select>

		</div>

		<div id="direitaped">

			<label>Situacão</label>
			<input type="text" disabled name="situacao"  
			value="Aberto" class="input" required>

    		<label>Mesa</label>
			<select id="selectmesa" name="selectmesa" required>
					
				<option selected disabled value="">Mesas Disponíveis</option>

				<?php 

				if(!isset($_GET['itemped'])):
				foreach($ms as $linha):?>
				<option value="<?php print $linha['cod_mesa'];?>">
						
						<?php print $linha['cod_mesa'].' - '.$linha['status'];?> 
							
				</option>
				<?php endforeach;
					  else:
				?>

					 	<option selected value="<?php print $_GET['codm']?>">
						
						<?php print $_GET['codm'].' - Indisponível';?> 
							
						</option>


				<?php endif; ?>
				

				<input type="HIDDEN" name="itens" id="itens" required>

			</select>
			
		</div>


		<div id="direitab">
		
			<button class="btnPed" onclick="registrarPed()"  id="frmbtnPed">
				Registrar
			</button>
		
		</div><!-- -->

		
	</fieldset>
	</form>


		<button id="btnCancelar" type="submit" onclick="cancelar()" name="submit">Cancelar</button>
</div>



<div class="formularioPed">
	
	<form class="formPed">
	
	<fieldset>
		
		<legend>Informações do Pedido</legend><!--selectprod quantidade preco-->

		
			<select class="selectped" id="selectItemprod" onchange="itemValor()" disabled required>
				
				<option selected disabled value="">Escolha o Item Pedido</option>

				<?php foreach($itensped as $lista):?>

				<option value="<?php print $lista['cod_produto']?>">

					<?php print $lista['descricao'];?>



				</option>
				<?php endforeach;?>

			</select><br>

		<div id="esquerdaitem">
			
			<label>Quantidade</label>
			<input type="number" min="1" max="10" placeholder="0" name="quantidade" 
			id="quantidade" class="input" readonly  required>	

			

		</div>
		<div id="esquerdaitem">

			<label for="preco">Preço de venda</label>
			<input type="number" step="any" min="0" max="1000" placeholder="R$ 00,00" name="preco" class="input" id="preco" readonly required>
			
		</div>
		
		<div id="direitab">
			
			<button class="btnPed"  onclick="return newItemped()" name="btnItemPed">
			
				Novo Item
			
			</button>
		</div>
	</fieldset>
	</form>

	
		<button id="btnGuardar"  onclick="guardarPed()" name="submit">
			Guardar Pedido
		</button>

</div>

</div>

<script type="text/javascript">

function itemValor(){

		let prod = document.getElementById('selectItemprod');
		const coditem = prod.options[prod.selectedIndex].value;

		let js = <?=$arrayjs?>;
	
		const precoprod = js.find(codp => codp.cod_produto === parseInt(coditem)).preco_venda;

		document.getElementById('preco').value = precoprod;

		

	}
</script>

<?php

	if(isset($_GET['itemped'])):

		echo "<script type='text/javascript'>",

							"registrarPed();",

							
    					 "</script>";
    endif;
?>