<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mercuryo S&Q</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery livraria -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- JavaScript compilado-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>
	<?php
		session_start();
		include 'conexao.php';
		include 'nav.php';
	?>
    <div class="fundo text-center"> 
    	<h1 class="display-4">Welcome to Mercuryo SQ!</h1>
    	<p class="lead text-center">More than lines of code, we transform ideas into new businesses.</p>
    	<a class="btn btn-primary btn-lg" href="servicos.php" role="button">know more</a>
	<br><br><br><br><br><br>
	<?php include 'rodape.html';?>
	<script src="js/efeitoescreve.js"></script>
</body>
</html>