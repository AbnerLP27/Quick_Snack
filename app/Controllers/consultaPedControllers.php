<?php


require_once('../Config/config.php');

// Verifica se existe a variável codmesa
if (isset($_GET["codmesa"])) {

    $cod = $_GET["codmesa"];


    /*====[ Consultar Pedido que está na mesa ]*/
    $mesa = new Mesa();
    $params = Array('cod' => $cod);
    $result =  $mesa->selectMesa($params);

    /*===[ Consultar todo os itens pedidos do pedido ]*/
    $itens = new ItensPedido();
    $itensPed = $itens->selectedItensPed(array($result[0]['cod_pedido']));

	
    if(count($result) > 0){//Se retornou pedido

        /*========[ Montar a lista de Pedidos e Itens Pedidos ]========*/
        $listainped = "<ul class='listapedConsultar'>";
        $listainItped = "<ul class='listapedConsultar'>";
        $btnNew = "<button id='btnNewItemPed' onclick='registrarPed()'>Novo Item Pedido</button>";
        $listafim = "</ul>";

        foreach ($result as $linha ) {

             $listainped .= "<li class='ped'>Pedido: ".$linha['cod_pedido']."</li>";
             $listainped .= "<li>Data: ".$linha['data']."</li>";
             $listainped .= "<li>Situação: Aberto</li>";
             $listainped .= "<li class='desconto'>Desconto: ".$linha['desconto']."%</li>";
             $listainped .= "<li class='login'>Vendedor(a): ".$linha['login']."</li>";
             $listainped .= "<li class='codmesa'>Mesa: ".$linha['cod_mesa']."</li>";
             $listainped .= $listafim;
           
        }

       $subtotal = 0;
        foreach ($itensPed as $linha) {
        	

        	$listainItped .= "<li>Item: ".$linha['descricao']." / Qtd: ".
        	$linha['quantidade']."</li>";

        	$subtotal += $linha['valor'] * $linha['quantidade'] ;


        }

        $listainItped .= "<li>SubTotal: R$".$subtotal."</li>";//Multipli
        $listainItped .= $btnNew;
        $listainItped .= $listafim;


        /*===[ Mostra Conteúdo na Div*/
        print $listainped;
        print $listainItped;

    }else{

            echo "Sem lista";

    }

    

}