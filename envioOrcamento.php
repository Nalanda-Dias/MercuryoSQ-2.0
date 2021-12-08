<?php
	include 'conexao.php';

	$Nome = $_POST['txtnome'];
	$CPF = $_POST['txtcpf'];
	$Email = $_POST['txtemail'];
	$Serviço = $_POST['txtserviços'];
	$Descricao = $_POST['txtdescricao'];

	/*echo $Nome;
	echo $CPF;
	echo $Email;
	echo $Serviço;
	echo $Descricao;*/

	$consultaorcamento = $conexao->query("select Nome_Usuario, CPF, Email, Nome_Serviço, Descrição_Atividade from tbl_Orçamento");

	$exibeOrc = $consultaorcamento->fetch(PDO::FETCH_ASSOC);

	if($consultaorcamento->rowCount() > 1)
	{

	}
	else{
		$Insert = $conexao->query("insert into tbl_Orçamento (Nome_Usuario, CPF, Email, Nome_Serviço, Descrição_Atividade) values ('$Nome', '$CPF', '$Email', '$Serviço', '$Descricao');");

		header('location:index.php');
	}
?>