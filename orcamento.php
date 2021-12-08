<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trabalhe Conosco</title>
		<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery livraria -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- JavaScript compilado-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script src="jquery.mask.min.js"></script>
	<script src="js/trabalheConosco.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Trabalheconosco.css">
</head>
<body>
	<?php
		session_start();
		include 'conexao.php';
		include 'nav.php';

		$Consulta_Serviço = $conexao->query("select Nome_Serviço from tbl_Serviço");
	?>
	<div class="container-fluid modal-content" style="height: 600px; width: 600px; margin-left:400px">
		<h1>ORÇAMENTO</h1>
		<br><br>
		<form method="post" action="#" enctype="multipart/form-data" name="orcamento">
			<div class="col-md-7 col-md-offset-3">
			 	<div>
			 		<label>Nome</label>
			 		<input type="text" name="nome" class="form-control" required>
			 	</div>
			 	<br>
			 	<div>
			 		<label>CPF</label>
			 		<input type="text" name="nome" class="form-control" required>
			 	</div>
			 	<br>
			 	<div>
			 		<label>Email</label>
			 		<input type="text" name="nome" class="form-control" required>
			 	</div>
			 	<br>
			 	<div>
			 		<label>Serviço</label>
			 		<select class="form-control">
			 			<option value=" ">Selecione</option>
			 			<?php while ($ListaServiço = $Consulta_Serviço->fetch(PDO::FETCH_ASSOC)){ ?>
			 			<option value="<?php echo $ListaServiço['Nome_Serviço'];?>"><?php echo $ListaServiço['Nome_Serviço'] ?></option>
			 			<?php } ?>
			 		</select>
			 	</div>
			 	<br>
			 	<div>
			 		<label>Descrição da atividade</label>
			 		<textarea class="form-control"></textarea>
			 	</div>
			 	<br>
			 	<div>
			 		<input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
			 	</div>
			</div>
		</form>
	</div>
</body>
<?php include 'rodape.html';?>
</html>