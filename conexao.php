<?php
	//Criando variavel
	$servidor = "localhost";
	$usuario = "MercuryoSQ";
	$senha = "admin123";
	$banco = "db_MercuryoSQ";

	//PDO é uma classe de conexão do mysql com php
	//usando um servidor MYSQL, servidor local, passar o nome do banco e o usuario e a senha
	$conexao = new PDO ("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>