<?php  
	include 'conexao.php';

	$Email = $_POST['txtemail'];
	$Nome = $_POST['txtnome'];
	$Usuario = $_POST['txtusuario'];
	$Senha = $_POST['senha'];

	/*echo $Email;
	echo $Nome;
	echo $Usuario;
	echo $Senha;*/

	$ConsultaUsuario = $conexao->query("select Email from tbl_usuario where Email = '$Email' ");

	$exibeUsu = $ConsultaUsuario->fetch(PDO::FETCH_ASSOC);

	if($ConsultaUsuario->rowCount() > 1)
	{

	}
	else{
		$Insert = $conexao->query("insert into tbl_usuario (Email, Nome_Usuario, Usuario, Senha) values ('$Email', '$Nome', '$Usuario', '$Senha');");

		header('location:index.php');
	}
?>