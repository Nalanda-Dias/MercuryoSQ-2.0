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
	<link rel="stylesheet" type="text/css" href="css/faq.css">
</head>
<body>
	<?php 
		include 'nav.php'; 
	?>
	<br>
	<h1>PERGUNTAS FREQUENTES</h1>
	<div>
		<button class="Pergunta">1. Como posso entrar em contato com a Mercuryo S&Q?</button>
		<p id="Resposta">Redes Sociais, pela aba Contato, lá tem a opção de enviar suas duvidas para a equipe quanto solicita um orçamento ou indo até nossa empresa.</p>

		<button class="Pergunta">2. Quais são os serviços oferecidos pela Mercuryo S&Q?</button>
		<p id="Resposta">Desenvolvimento de Software, Designer Digital, Banco de Dados, Análise de Sistemas e Criação de Sites. Na aba serviços, explicamos melhor cada serviço da nossa empresa.</p>

		<button class="Pergunta">3. Qual o valor de um sistema?</button>
		<p id="Resposta">Não temos um valor especifico pois o valor depende do que o cliente solicitar, para mais informações entre em contato com nossa equipe de orçamentos.</p>

		<button class="Pergunta">4. Quais tipos de linguagens a Mercuryo S&Q trabalha no desenvolvimento de Sistemas?</button>
		<p id="Resposta">Trabalhamos com a linguagem C# e Java.</p>

		<button class="Pergunta">5. Quais são as formas de pagamento?</button>
		<p id="Resposta">Dinheiro, cartão debito e credito, pix e boleto bancário.</p>
	</div>
	<script src="js/Faq.js"></script>

	<?php include 'rodape.html';?>
</body>
</html>