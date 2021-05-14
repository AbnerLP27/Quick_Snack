<!DOCTYPE - html>
<html lang="pt-br">
<head>


	<meta charset="utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="app/Assets/css/loginstyle.css">
	<link rel="sortcut icon" href="app/Assets/img/logoqs.png" type="image/x-icon">
	<title>Quick Snack - Login</title>
	

</head>
<body>


	<div id="formulario-login">

		<form id="formlogin" method="POST" action="app/Controllers/LoginController.php">

			<div class="logo">
				
				<img src="" alt="Logo Quick Snack">
			</div>

			<div class="logcontainer">

				<label>Login</label>
				<input type="text" name="login" placeholder="Login" required>

			
				<label>Senha</label>
				<input type="password" name="senha" placeholder="Senha" required>

			</div>



				<input type="submit" name="entrar" value="Entrar" class="botao">
			
		</form>	

		<div>


</body>
</html>