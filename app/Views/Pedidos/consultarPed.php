<?php

require('Config/config.php');

$mesa = new Mesa();

$allMesa = $mesa->getAllMesasInd();//


?>

<script type="text/javascript" src="Assets/JavaScript/ajax.js"></script>


<h1>Consultar Pedidos</h1>


<div class="container">

<div id="menuConsulta">

	
      <select id="selectmesa" onchange="getDados()">

      	<option selected disabled value="">Mesa</option>

      	<?php foreach($allMesa as $linha):?>

		<option value="<?php print $linha['cod_mesa']?>">

				<?php print 'Mesa '.$linha['cod_mesa']?>
		</option>
		
		<?php endforeach;?>

	</select>
        

 </div>

<div class="listPedsConsultar" id="listPedsConsultar">
	

	<ul class="listapedConsultar">
		
		<li style="text-align: center;">Selecione uma mesa </li>
		
	</ul>




</div>
</div>
<script type="text/javascript">
	

	function registrarPed(){

		/*===[ Pegar os dados da lista ]*/

		var ped = document.querySelector(".listapedConsultar>.ped");
		var desc = document.querySelector(".listapedConsultar>.desconto");
		var log = document.querySelector(".listapedConsultar>.login");
		var codm = document.querySelector(".listapedConsultar>.codmesa");

		/*[ Remover alguns itens]*/
		ped = ped.innerText.split(" ",2)[1];
		desc = desc.innerText.split(" ",2)[1];
		log = log.innerText.split(" ",2)[1];
		codm = codm.innerText.split(" ",2)[1];


		
		location.href = "?pagina=novoPed&itemped="+ped+"&desc="
												  +desc+"&log="
												  +log+"&codm="
												  +codm;

	}


</script>