<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Services</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery livraria -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- JavaScript compilado-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script src="jquery.mask.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Servicos.css">
</head>
<body>
	<?php
		session_start();
		include 'conexao.php';
		include 'nav.php';
	?>
	<br>
	<h1>SERVICES</h1>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/analise.png">
			<h2>Systems Analysis</h2>
			<p class="paragrafo">Through the analysis, we were able to understand the customer's needs and thus define the functional requirements (Function of the system) and the non-functional requirements (Explanation of the functions of the system) and finally make the use case and class diagrams.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Budget</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/BD.png">
			<h2>Database</h2>
			<p class="paragrafo">We create the systems with access to MYSQL (Database), and we also do data normalization and the Conceptual, Logical and Physical models.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Budget</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/Software.png">
			<h2>Systems development</h2>
			<p class="paragrafo">We create systems according to the client's needs and we use ASP NET and C#.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Budget</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/Software.png">
			<h2>Mobile app</h2>
			<p class="paragrafo">We develop solutions in mobile apps for android devices.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Budget</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/design-grafico.png">
			<h2>Digital Designer</h2>
			<p class="paragrafo">We create Logos, Banners, Flyer and Business Card, all with interactivity.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Budget</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/Criação de sites.png">
			<h2>Website Creation</h2>
			<p class="paragrafo">We create websites as the client requests and we use a framework such as Bootstrap, and the following languages: HTML, CSS, JavaScript and PHP.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Budget</a>
	</div>
	<?php include 'rodape.html';?>
</body>
</html>