<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Our story</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery livraria -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- JavaScript compilado-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script src="jquery.mask.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Nossahistoria.css">
</head>
<body>
	<?php
		session_start();
		include 'conexao.php';
		include 'nav.php';
	?>
	<br>
	<div class="container-fluid">
		<div class="text-center">
			<h1>Our story</h1>
			<br><br>
			<p style="font-size:19px; color:black;">Mercuryo S&Q was created on May 8, 2021, when seven people came up with the idea to enter the technology business. The company's name was inspired by “Mercury”, a god of Roman mythology associated with speed, which explains the concept of our name (Speed and Quality).</p>
		</div>
		<br><br>
		<div class="row text-center" style="font-size:19px; color: black;">
			<div class="col-sm-4">
				<img class="img-fluid" src="imagens/Missão.png">
				<p>Provide services that meet the needs of our customers, exceeding expectations and offering much more than just services.</p>
			</div>
			<div class="col-sm-4">
				<img class="img-fluid" src="imagens/Visão.png">
				<p>To be a leader in the world of technology; Be recognized for being a reliable and innovative company.</p>
			</div>
			<div class="col-sm-4">
				<img class="img-fluid" src="imagens/Valores.png">
				<p>Innovation; Consistency; Commitment to customer satisfaction; Diversity in technology; Creativity.</p>
			</div>
		</div>
	</div>
	<?php include 'rodape.html';?>
</body>
</html>