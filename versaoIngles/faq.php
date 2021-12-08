<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COMMON QUESTIONS</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery livraria -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- JavaScript compilado-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script src="jquery.mask.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Faq.css">
</head>
<body>
	<?php
		session_start();
		include 'conexao.php';
		include 'nav.php';
	?>
	<br>
	<h1>COMMON QUESTIONS</h1>
	<div>
		<button class="Pergunta">1. How can I contact Mercuryo S&Q?</button>
		<p id="Resposta">Through Social Networks or on the Contact page you have our address, where you can be going to visit us.</p>

		<button class="Pergunta">2. What services does Mercuryo S&Q offer?</button>
		<p id="Resposta">Systems Analysis, Database, Software Development, Mobile Application, Digital Designer and Website Creation. In the Services tab, we explain better each service of our company.</p>

		<button class="Pergunta">3. What is the value of a system?</button>
		<p id="Resposta">We do not have a specific value because the value depends on what the customer requests, for more information, contact our quotations team.</p>

		<button class="Pergunta">4. What kinds of languages does Mercuryo S&Q work on in Systems development?</button>
		<p id="Resposta">We work with ASP NET, C# and Java.</p>

		<button class="Pergunta">5. What are the payment methods?</button>
		<p id="Resposta">Cash, debit and credit card, pix and bank slip.</p>
	</div>
	<script src="js/Faq.js"></script>

	<?php include 'rodape.html';?>
</body>
</html>