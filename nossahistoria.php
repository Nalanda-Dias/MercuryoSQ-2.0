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
			<h1>NOSSA HISTÓRIA</h1>
			<br><br>
			<p style="font-size:19px; color:black;">A Mercuryo S&Q foi criada em 08 de maio de 2021, quando sete pessoas tiveram a ideia de entrar no ramo da tecnologia. O nome da empresa, foi inspirado em “Mercúrio”, deus da mitologia romana bastante associado a velocidade, o que explica o conceito do nosso nome (Speed and Quality).</p>
		</div>
		<br><br>
		<div class="row text-center" style="font-size:19px; color: black;">
			<div class="col-sm-4">
				<img class="img-fluid" src="imagens/Missão.png">
				<p>Fornecer serviços que atende as necessidades de nossos clientes, superando as expectativas e oferecendo muito mais que apenas serviços.</p>
			</div>
			<div class="col-sm-4">
				<img class="img-fluid" src="imagens/Visão.png">
				<p>Ser líder no mundo da tecnologia; Ser reconhecida por ser uma empresa confiável e inovadora.</p>
			</div>
			<div class="col-sm-4">
				<img class="img-fluid" src="imagens/Valores.png">
				<p>Inovação; Consistência; Compromisso com a satisfação do cliente; Diversidade em tecnologia; Criatividade.</p>
			</div>
		</div>
	</div>
	<?php include 'rodape.html';?>
</body>
</html>