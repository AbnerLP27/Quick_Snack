<?php

require_once('../Config/config.php');


	$login = isset($_POST['login']) ? $_POST['login']:'';
	$senha = isset($_POST['senha']) ? $_POST['senha']:'';


	if(empty($login) || empty($senha)){


		print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../../index.php'> 

         	<script type='text/javascript'>window.alert('Login ou senha não encontrado, tente novamente.')
         </script> ";   

         exit;

    }

	$params = array($login, $senha);

    $fun = new Funcionario();

    $result = $fun->login($params);




    if(count($result)<=0){


    	print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ../../index.php'> 

         	<script type='text/javascript'>window.alert('Login ou senha não encontrado, tente novamente.')
         </script> ";  

         exit;

    }



    $funcionario = $result[0];


    session_start();

    $_SESSION['logado'] = true;
	$_SESSION['login'] = $funcionario['login'];
	$_SESSION['cargo'] = $funcionario['cargo'];



header('location: ../index.php');