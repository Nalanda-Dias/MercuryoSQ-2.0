<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nossa história</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery livraria -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- JavaScript compilado-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script src="jquery.mask.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/localizacao.css">
</head>
<body>
	<?php
		session_start();
		include 'conexao.php';
		include 'nav.php';
	?>
	<br>
	<h1>LOCALIZAÇÃO</h1>
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3221444192736!2d-46.730950684531585!3d-23.520913165986048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8c1d3806777%3A0x8d03885c01c45d8a!2sR.%20Guaip%C3%A1%2C%20678%20-%20Vila%20Leopoldina%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002675-031!5e0!3m2!1spt-BR!2sbr!4v1623262642772!5m2!1spt-BR!2sbr" width="800" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<?php include 'rodape.html';?>
</body>
</html>