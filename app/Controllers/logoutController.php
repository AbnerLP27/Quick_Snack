

<?php



session_start();//Inicia a sessão neste arquivo

unset($_SESSION['login']);
unset($_SESSION['usuario']);

session_destroy();

header('location: ../../index.php');

?>