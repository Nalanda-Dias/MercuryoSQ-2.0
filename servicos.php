<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Serviços</title>

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
	<h1>SERVIÇOS</h1>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/analise.png">
			<h2>Análise de Sistemas</h2>
			<p class="paragrafo">Através da análise, conseguimos entender as necessidades do cliente e assim definir os requisitos funcionais (Função do sistema) e os requisitos não funcionais (Explicação das funções do sistema) e por fim fazer os diagramas de casos de uso e de classes.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Orçamento</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/BD.png">
			<h2>Banco de Dados</h2>
			<p class="paragrafo">Criamos os sistemas com acesso ao MYSQL (Banco de Dados), e também fazemos normalização de dados e  os modelos Conceitual, Lógico e Físico.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Orçamento</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/Software.png">
			<h2>Desenvolvimento de Sistemas</h2>
			<p class="paragrafo">Criamos sistemas conforme a necessidade do cliente e utilizamos ASP NET e C#.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Orçamento</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/Software.png">
			<h2>Aplicativo Mobile</h2>
			<p class="paragrafo">Desenvolvemos soluções em aplicativos mobile para dispositivos android</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Orçamento</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/design-grafico.png">
			<h2>Designer Digital</h2>
			<p class="paragrafo">Criamos Logos, Banners, Flyer e Cartão de Visita, todos com interatividade.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Orçamento</a>
	</div>
	<br><br>
	<div class="modal-content">
		<img class="img" src="imagens/Criação de sites.png">
			<h2>Criação de Sites</h2>
			<p class="paragrafo">Criamos sites conforme o cliente solicita e utilizamos framework como Bootstrap, e as seguintes linguagens: HTML, CSS, JavaScript e PHP.</p>
			<a class="btn btn-primary" id="botaoOrç" href="login.php" role="button">Orçamento</a>
	</div>
	<?php include 'rodape.html';?>
</body>
</html>