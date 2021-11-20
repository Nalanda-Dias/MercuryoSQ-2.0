<?php 
	include 'conexao.php';

	$Nome = $_POST['txtnome'];
	$Sobrenome = $_POST['txtSobrenome'];
	$Data_Nascimento = $_POST['txtdata_nascimento'];
	$Estado_Civil = $_POST['sltEstadoCivil'];
	$Email = $_POST['txtemail'];
	$Celular = $_POST['txtcelular'];
	$Endereco = $_POST['txtendereco'];
	$Numero = $_POST['txtnumero'];
	$CEP = $_POST['txtCEP'];
	$Estado = $_POST['sltEstado'];
	$Cidade = $_POST['txtcidade'];
	$Linguagens_Prog = $_POST['sltLing_Prog'];
	$Sistemas_Opera = $_POST['sltSistOpera'];
	$Redes = $_POST['sltRedes'];
	$Pacotes_Office = $_POST['sltPacoteOffice'];
	$Descricao_Formacao = $_POST['txtformacao'];
	$Ultima_Empresa = $_POST['txtexperiencia'];
	$Cargo = $_POST['txtcargo'];
	$Data_Entrada = $_POST['txtdataentrada'];
	$Data_Saida = $_POST['txtdatasaida'];
	$Curriculo = $_POST['txtcurriculo'];


	//SELECT NO BANCO DE DADOS 
	$consulta = $conexao->query("select Email from tbl_TrabalheConosco where Email = '$Email' ");

	$exibe = $consulta -> fetch(PDO::FETCH_ASSOC);


	if ($consulta->rowCount() == 1)
	{
		echo 'email já cadastrado';
	}
	else{
		$Insert = $conexao->query("insert into tbl_TrabalheConosco (Nome, Sobrenome, Data_Nascimento, Nome_Estado_Civil, Email, Celular, Endereco, Numero, CEP, Nome_Estado, Cidade, Linguagens_Prog, Sistemas_Operac, Redes, Pacote_Office, Descricao_Formacao, Ultima_Empresa, Cargo, Data_Entrega, Data_Saida, Curriculo)
			values ('$Nome','$Sobrenome',str_to_date('$Data_Nascimento','%d/%m/%Y'),'$Estado_Civil','$Email','$Celular','$Endereco','$Numero','$CEP','$Estado','$Cidade','$Linguagens_Prog', '$Sistemas_Opera','$Redes','$Pacotes_Office','$Descricao_Formacao','$Ultima_Empresa','$Cargo',str_to_date('$Data_Entrada','%d/%m/%Y'),str_to_date('$Data_Saida','%d/%m/%Y'),'$Curriculo');");
		header('location:index.php');

	}

?>