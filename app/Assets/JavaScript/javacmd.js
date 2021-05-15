


/*=================[ Header ]==============*/

	function sair(login){

		var esc = confirm("Deseja sair do login "+login+" ?");

		if(esc){

			location.href = "Controllers/logoutController.php";
		}
	}



/*=================[ Produtos ]==============*/

	function desc(id, descon, descricao){//Função em JavaScript para descontinuar/Continuar Prod

		if(descon == 0){//O produto está continuado

			var esc = confirm("Descontinuar "+descricao+" ?");//Descontinuar produto Sim/Não

			if(esc){//true
				
			

				location.href = '../../app/Controllers/ProdutosDescController.php?id_prod='+id;
				alert("Produto "+descricao+" descontinuado com sucesso! ");

			}

			return esc;

		}else if(descon == 1){//O produto está descontinuado

			var esc = confirm("Continuar "+descricao+" ?");//Continuar Produto Sim/Não

			if(esc){

				location.href = '../../app/Controllers/ProdutosDescController.php?id_prod='+id;
				alert("Produto "+descricao+" está continuado com sucesso! ");
			}

			return esc;
		}
		
	}










/*=================[ Funcionario ]==============*/




	function desativar(atv, codFun, nome){

		var escolha;

		if(atv == 1){


			escolha = confirm("Desativar o acesso do funcionário "+nome+" ?");
		
			if(escolha){

				location.href = '../../app/Controllers/FunDesativarController.php?id_fun='+codFun;
				alert("Funcionário "+nome+" desativado com sucesso!");
			}

			return escolha;

		}else if(atv==0){


			escolha = confirm("Ativar o acesso do funcionário "+nome+" ?");

			if(escolha){

				location.href = '../../app/Controllers/FunDesativarController.php?id_fun='+codFun;

				alert("Funcionário "+nome+" ativado com sucesso!");

			}

			return escolha; 
		}

		
	}







/*=================[ Funcionario add ]*/	

	function validar(){

		var senha = document.getElementById("senha").value;
		var confSenha = document.getElementById("confsenha").value;

		if(senha !== "" && confSenha !== ""){

			if(senha.length >= 5){

				if(senha == confSenha){

					return true;


				}else {

				
					alert("As senhas estão incorretas. Tente novamente.");

				 	document.getElementById("senha").value = "";
				 	document.getElementById("confsenha").value = "";
				 	document.getElementById("senha").focus();

				 	return false;

				}

			}else{

				alert("A senha deve ter no mínimo 5 caracteres. Tente um nova Senha.");

				 document.getElementById("senha").value = "";
				 document.getElementById("confsenha").value = "";
				 document.getElementById("senha").focus();

				 return false;

			}

		}

	


			

			

	}

