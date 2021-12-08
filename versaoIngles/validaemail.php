<?php  
include 'conexao.php';

	$Email = $_POST['txtemail'];

	$consulta = $conexao->query("select Email from tbl_TrabalheConosco where Email = '$Email' ");

	$exibe = $consulta -> fetch(PDO::FETCH_ASSOC);

	
	if ($consulta->rowCount() > 1)
	{ 
		echo "Este endereço de e-mail já está em uso. Tente outro.";
	}
		 
?>