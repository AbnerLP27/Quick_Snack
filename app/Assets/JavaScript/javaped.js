
	
		var form1;//Formulário 1
		var frm1ok = false;	//Formulário 1 está ok
		var itemped = [];//Array de itens Pedidos
		var itempeok = false;//Itens Pedido está ok


function registrarPed(){

		let desc = document.getElementById('desconto').value;
		let selectm = document.getElementById('selectmesa');
		let selectf = document.getElementById('selectfun');

		form1 = document.getElementById('formPed');

		if(desc !== "" && selectm.options[selectm.selectedIndex].value !== ""){

				/*========[ Desativar todos os campos do form 1]======*/
		 		document.getElementById('desconto').readOnly = true;
				document.getElementById('frmbtnPed').disabled = true;
				selectm.style.pointerEvents = "none";
				selectf.style.pointerEvents = "none";

				/*========[ Ativar os campos do form 2]======*/
				document.getElementById('quantidade').readOnly = false;
				document.getElementById('selectItemprod').disabled = false;
				

				alert("Atenção: Insira os itens pedidos.");
				document.getElementById('quantidade').focus();
				this.form1ok = true;//Formulário 1 está ok
				
				return false;			
		}else{
				return true;
		}
	}


function newItemped(){

		let selectcodp  = document.getElementById('selectItemprod');
		let qtd = document.getElementById('quantidade').value;
		let precoprod = document.getElementById('preco').value;
		
		if(this.form1ok){/*<[ Formulário 1 está ok]*/

			if(selectcodp.options[selectcodp.selectedIndex].value !== "" && qtd != 0){

				itemped.push([selectcodp.options[selectcodp.selectedIndex].value, 
							 qtd, 
							 precoprod]);

				
				/*[ Limpar inputs para novo item pedido]*/
				document.getElementById('selectItemprod').value = "";
				document.getElementById('quantidade').value = null;
				document.getElementById('preco').value = null;
				
				itempeok = true;


				alert("Novo Item pedido.");

				return false;

			}else{

				return true;

			}

		}else{

			alert("Atenção: Para incluir um item pedido, será necessário  registrar um Pedido.");
			return false;
		}
}



function guardarPed(){

	if(itempeok){

		document.getElementById('itens').value = this.itemped;
		this.form1.submit();
		
	}else{

		alert("Atenção: Para guardar Pedido, adicione pelo menos 1(um) item Pedido.");
	}
		

}



function cancelar(){

	let resp = confirm("Cancelar Pedido ?");

	if(resp){

		location.href = "?pagina=pedidos";
	}
	
}