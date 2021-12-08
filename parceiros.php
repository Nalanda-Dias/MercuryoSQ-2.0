<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parceiros</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery livraria -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- JavaScript compilado-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script src="jquery.mask.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Parceiros.css">
</head>
<body>
	<?php
		session_start();
		include 'conexao.php';
		include 'nav.php';
	?>
	<br>
	<h1>PARCEIROS</h1>
	<div class="row">
		<img class="col" src="imagens/Logo parceiros1.png">
		<img class="col" src="imagens/Logo parceiros2.png">
		<img class="col" src="imagens/Logo parceiros3.png">
		<img class="col" src="imagens/Logo parceiros4.png">
	</div>
	<br><br>
	<div class="row">
		<img class="col" src="imagens/Logo parceiros5.png">
		<img class="col" src="imagens/Logo parceiros6.png">
		<img class="col" src="imagens/Logo parceiros7.png">
		<img class="col" src="imagens/Logo parceiros8.png">
	</div>
	<?php include 'rodape.html';?>
</body>
</html>