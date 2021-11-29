<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Erro</title>
		<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery livraria -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- JavaScript compilado-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/errotrabConosco.css">
</head>
<body>
	<?php
		include 'nav.php';  
	?>
	<img class="erro" src="imagens/erro.gif">
	<section>
		<div class="text-center">
			<h1 class="display-4">ERRO !!!</h1>
	    	<p class="lead text-center">Este endereço de email já está sendo usado por um usuário.</p>
		</div>
	</section>

	<div class="container-fluid">
		<div class="row">	
			<div class="col-sm-4 col-sm-offset-4 text-center">
				<a href="trabalheConosco.php" class="btn btn-block btn-info" role="button" id="botão">Tentar Novamente</a>
				
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<?php include 'rodape.html';?>
</body>
</html>