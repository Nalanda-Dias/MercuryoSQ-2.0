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
	<link rel="stylesheet" type="text/css" href="css/TrabalheConosco.css">

</head>
<body>
	<?php
		include 'conexao.php';
		include 'nav.php';

		$Consulta_EstadoCivil = $conexao->query("select * from tbl_EstadoCivil");
		$Consulta_Estado = $conexao->query("select * from tbl_Estado");
	?>

	<div class="container-fluid" id = "oi">
		<h1>TRABALHE CONOSCO</h1>
		<br>
		<p>Se você deseja trabalhar conosco, você pode preencher o formulário e anexar o seu currículo abaixo: </p>
		<br>
		<form method="post" action="InserirPessoas.php" enctype =" multipart /form-data" name="TrabalheConosco" > <!--Abrindo o formulario-->
			<h3 class="mt-4">Dados Pessoais</h3>
			<br><br>
			<div class="col-md-7 col-md-offset-3"> <!--Posiciona os rotulos e caixas de textos-->
				<div class="form-row">
					<div class="form-group col-md-5"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="nome">Nome</label><br><!--Rotulo-->
						<input type="text" name="txtnome" id="nome" class="form-control" placeholder="Digite seu nome" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-6">
						<label for="Sobrenome">Sobrenome</label><br> <!--Rotulo-->
						<input type="text" name="txtSobrenome" id="Sobrenome" class="form-control" placeholder="Digite seu sobrenome" required><!--Caixa de texto-->
					</div> 
				</div> 
				<div class="form-row">
					<div class="form-group col-md-5"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="data_nascimento">Data de nascimento</label><br><!--Rotulo-->
						<input type="text" name="txtdata_nascimento" id="data_nascimento" class="form-control"required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-6 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="sltEstadoCivil">Estado civil</label><br><!--Rotulo-->
						<select class="form-control" name="sltEstadoCivil" required>
							<option value=" ">Selecione</option>
							<?php while ($ListaEstadoCivil = $Consulta_EstadoCivil->fetch(PDO::FETCH_ASSOC)) { ?>
								<option value="<?php echo $ListaEstadoCivil['Nome_Estado_Civil'];?>"><?php echo $ListaEstadoCivil['Nome_Estado_Civil'];?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-5"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="email">E-mail</label><br><!--Rotulo-->
						<input type="email" name="txtemail" id="email" class="form-control" placeholder="Digite seu email" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-6"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="celular">Celular</label><br><!--Rotulo-->
						<input type="text" name="txtcelular" id="celular" class="form-control" placeholder="Digite o número do celular" required><!--Caixa de texto-->
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-7"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="endereco">Endereço</label><br><!--Rotulo-->
						<input type="text" name="txtendereco" id="endereco" class="form-control" placeholder="Digite seu endereço" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-4"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="numero">Número</label><br><!--Rotulo-->
						<input type="text" name="txtnumero" id="numero" class="form-control" placeholder="Número da casa" required><!--Caixa de texto-->
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="CEP">CEP</label><br><!--Rotulo-->
						<input type="text" name="txtCEP" id="CEP" class="form-control" placeholder="Digite o cep" onblur="pesquisacep(this.value);" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-4 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Estado">Estado</label><br><!--Rotulo-->
						<select class="form-control" name="sltEstado" id="estado" required>
							<option value="">Selecione</option>
							<?php while ($ListaEstados = $Consulta_Estado->fetch(PDO::FETCH_ASSOC)) { ?>
								<option value="<?php echo $ListaEstados['Nome_Estado'];?>"><?php echo $ListaEstados['Nome_Estado'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group col-md-4"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="cidade">Cidade</label><br><!--Rotulo-->
						<input type="text" name="txtcidade" id="cidade" class="form-control" placeholder="Digite o nome da cidade" required><!--Caixa de texto-->
						<br><br>
					</div>
				</div>
				<h3 class="Titulo">Conhecimentos em Informática</h3>
				<br><br>
				<div class="form-row">
					<div class="form-group col-md-6 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Ling_Prog">Linguagens de programação</label><br><!--Rotulo-->
						<select class="form-control" name="sltLing_Prog" required>
							<option value="">Selecione</option>
							<option value="Sim">Sim</option>
							<option value="Não">Não</option>
						</select>
					</div>
					<div class="form-group col-md-5 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="SistOpera">Sistemas Operacionais</label><br><!--Rotulo-->
						<select class="form-control" name="sltSistOpera" required>
							<option value="">Selecione</option>
							<option value="Sim">Sim</option>
							<option value="Não">Não</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Redes">Redes</label><br><!--Rotulo-->
						<select class="form-control" name="sltRedes" required>
							<option value="">Selecione</option>
							<option value="Sim">Sim</option>
							<option value="Não">Não</option>
						</select>
					</div>
					<div class="form-group col-md-5 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="PacoteOffice">Pacote Office</label><br><!--Rotulo-->
						<select class="form-control" name="sltPacoteOffice" required>
							<option value="">Selecione</option>
							<option value="Sim">Sim</option>
							<option value="Não">Não</option>
						</select>
						<br><br>
					</div>
				</div>
				<h3 class="Titulo">Formação Escolar</h3>
				<div class="form-row">
					<div class="form-group col-md-11"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="formacao">Descreva a Formação</label><br><!--Rotulo-->
						<textarea name="txtformacao" rows="4" class="form-control" id="formacao"placeholder="Digite a sua formação, por exemplo: Ensino Médio Completo, Técnico em Recursos Humanos Concluido e Técnico em Desenvolvimento de Sistemas Cursando." required></textarea>
						<br><br>
					</div>
				</div>
				<h3 class="Titulo">Experiências Profissionais</h3>
				<div class="form-row">
					<div class="form-group col-md-11"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="experiencia">Última empresa</label><br><!--Rotulo-->
						<input type="text" name="txtexperiencia" id="experiencia" class="form-control" placeholder="Digite o nome da última empresa" required><!--Caixa de texto-->
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-5"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Cargo">Cargo</label><br><!--Rotulo-->
						<input type="text" name="txtcargo" id="Cargo" class="form-control" placeholder="Nome do cargo" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-3"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="DataEntrada">Data de entrada</label><br><!--Rotulo-->
						<input type="text" name="txtdataentrada" id="DataEntrada" class="form-control" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-3"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Data_Saida">Data de saída</label><br><!--Rotulo-->
						<input type="text" name="txtdatasaida" id="Data_Saida" class="form-control" required><!--Caixa de texto-->
						<br><br>
					</div>
				</div>
				<h3 class="Titulo">Anexo do Currículo</h3>
				<div class="form-row">
					<div class="form-group col-md-11"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="curriculo">Currículo</label><br><!--Rotulo-->
						<input type="file" accept="Curriculo/*" class="form-control" name="txtcurriculo" id="curriculo" required>
						<br><br>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-offset-4"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<button type="submit" class="btn btn-lg btn-primary">Enviar informações </button>
					</div>
				</div>
			</div>
		</form>
	</div>

</body>
<?php include 'rodape.html';?>
</html>