<!DOCTYPE - html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/controllersstyle.css">
	<link rel="sortcut icon" href="Assets/img/logoqs.png" type="image/x-icon">
	<script type="text/javascript" src="Assets/JavaScript/javacmd.js"></script>
	<title>Quick Snack - Home</title>

</head>
<body>


<div class="App">


	<header>
		
		<a href="index.php">
			
			<img id="img">

		</a>

		<?php if(isset($_SESSION['login'])): ?>

		<a id="pre" style="cursor: pointer; text-decoration: underline;"  
		onclick="sair('<?php print $_SESSION['login']?>');">
		<!--href="Controllers/logoutController.php"-->
			
			<?php echo $_SESSION['login'].' - '.$_SESSION['cargo'].'  '; ?>
			<img id="icon"/>
		</a>

		
		
		<?php if($_SESSION['cargo'] == "Gerente"):?><!--Gerente-->
		<div id="menu">
			
			<a href="?pagina=home" >Home</a>
			<a href="?pagina=pedidos">Pedido</a>
			<a href="?pagina=produto">Produto</a>
			<a href="?pagina=mesa">Mesa</a>
			<a href="?pagina=estoque">Estoque</a>
			<a href="?pagina=funcionario">Funcionario</a>
		</div>
		<?php elseif($_SESSION['cargo'] == "Vendedor(a)"): ?><!---Vendedor(a)-->
		<div id="menu">
			<a href="?pagina=home" >Home</a>
			<a href="?pagina=pedidos">Pedido</a>
		</div>
		<?php endif;?>

		<?php endif;?>
			
	</header>

<main>