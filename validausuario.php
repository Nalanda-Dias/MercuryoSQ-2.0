<?php
	include 'conexao.php';

	session_start(); //Iniciando uma sessão

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$consulta = $conexao->query("select Código_Usuario, Email, Nome_Usuario, Usuario, Senha from tbl_usuario where Usuario = '$usuario' and Senha = '$senha' ");


	//se existi uma linha
	if($consulta -> rowCount() == 1)
	{
		$exibeusuario = $consulta->fetch(PDO::FETCH_ASSOC);
		$_SESSION['ID'] = $exibeusuario['Código_Usuario'];
		header('location:index.php');
	}
	else{
		header('location:erroLogin.php');
	}

?>