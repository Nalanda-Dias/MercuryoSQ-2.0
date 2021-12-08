<?php 

	include 'conexao.php';
 		$Email = $_POST['userLogin'];
 		$Senha = $_POST['UserPassword'];


	$consulta = $conexao->query("select Email,  Senha
		from tbl_usuario where Email = '$Email' and Senha = '$Senha' ");

	$exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
	if ($consulta->rowCount () == 1)
	{
		echo "SUCESSO !!";
	}
	else{
      echo "ERRO !!";
	}

 ?>