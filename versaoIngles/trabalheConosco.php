<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Work with us</title>
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

		$Consulta_EstadoCivil = $conexao->query("select * from tbl_EstadoCivil");
		$Consulta_Estado = $conexao->query("select * from tbl_Estado");

	?>

	<div class="container-fluid " id="formo">
        <h1>TRABALHE CONOSCO</h1>
        <br>
        <p> If you want to work with us, you can fill in the form and attach your resume below:</p>
        <br>

        <form method="post" action="InserirPessoas.php" enctype="multipart/form-data"  name="TrabalheConosco">
        	<h3 class="mt-4">Personal data</h3>
        	<br><br>
        	<div class="col-md-7 col-md-offset-3"> <!--Posiciona os rotulos e caixas de textos-->
        		<div class="form-row">
					<div class="form-group col-md-5"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="nome">Name</label><br><!--Rotulo-->
						<input type="text" name="txtnome" id="nome" class="form-control" placeholder="Type your name" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-6">
						<label for="Sobrenome">Last name</label><br> <!--Rotulo-->
						<input type="text" name="txtSobrenome" id="Sobrenome" class="form-control" placeholder="Enter your last name" required><!--Caixa de texto-->
					</div> 
				</div> 
				<div class="form-row">
					<div class="form-group col-md-5"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="data_nascimento">Date of birth</label><br><!--Rotulo-->
						<input type="text" name="txtdata_nascimento" id="data_nascimento" class="form-control"required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-6 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="sltEstadoCivil">Marital status</label><br><!--Rotulo-->
						<select class="form-control" name="sltEstadoCivil" id="EstadoCivil" required>
							<option value=" ">Select</option>
							<?php while ($ListaEstadoCivil = $Consulta_EstadoCivil->fetch(PDO::FETCH_ASSOC)) { ?>
								<option value="<?php echo $ListaEstadoCivil['Nome_Estado_Civil'];?>"><?php echo $ListaEstadoCivil['Nome_Estado_Civil'];?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-7"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="email">E-mail</label><br><!--Rotulo-->
						<input type="email" name="txtemail" id="txtemail" class="form-control" placeholder="Type your e-mail" required><!--Caixa de texto-->
						<p id="msg" style="color:red; font-size: 12px;"></p>
					</div>
					<div class="form-group col-md-4"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="celular">Cell phone</label><br><!--Rotulo-->
						<input type="text" name="txtcelular" id="celular" class="form-control" placeholder="Cellphone number" required><!--Caixa de texto-->
						<br>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-7"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="endereco">Address</label><br><!--Rotulo-->
						<input type="text" name="txtendereco" id="endereco" class="form-control" placeholder="Enter your address" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-4"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="numero">Number</label><br><!--Rotulo-->
						<input type="text" name="txtnumero" id="numero" class="form-control" placeholder="House number" required><!--Caixa de texto-->
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="CEP">CEP</label><br><!--Rotulo-->
						<input type="text" name="txtCEP" id="CEP" class="form-control" placeholder="Enter the zip code" onblur="pesquisacep(this.value);" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-4 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Estado">State</label><br><!--Rotulo-->
						<select class="form-control" name="sltEstado" id="estado" required>
							<option value="">Select</option>
							<?php while ($ListaEstados = $Consulta_Estado->fetch(PDO::FETCH_ASSOC)) { ?>
								<option value="<?php echo $ListaEstados['Nome_Estado'];?>"><?php echo $ListaEstados['Nome_Estado'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group col-md-4"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="cidade">City</label><br><!--Rotulo-->
						<input type="text" name="txtcidade" id="cidade" class="form-control" placeholder="Enter city name" required><!--Caixa de texto-->
						<br><br><br>
					</div>
				</div>
				<h3 class="Titulo">Computer knowledge</h3>
				<br><br>
				<div class="form-row">
					<div class="form-group col-md-6 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Ling_Prog">Programming languages</label><br><!--Rotulo-->
						<select class="form-control" name="sltLing_Prog" required>
							<option value="">Select</option>
							<option value="Sim">Yes</option>
							<option value="Não">No</option>
						</select>
					</div>
					<div class="form-group col-md-5 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="SistOpera">Operational systems</label><br><!--Rotulo-->
						<select class="form-control" name="sltSistOpera" required>
							<option value="">Select</option>
							<option value="Sim">Yes</option>
							<option value="Não">No</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Redes">Networks</label><br><!--Rotulo-->
						<select class="form-control" name="sltRedes" required>
							<option value="">Select</option>
							<option value="Sim">Yes</option>
							<option value="Não">No</option>
						</select>
					</div>
					<div class="form-group col-md-5 col-md-offset-0"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="PacoteOffice">Pacote Office</label><br><!--Rotulo-->
						<select class="form-control" name="sltPacoteOffice" required>
							<option value="">Select</option>
							<option value="Sim">Yes</option>
							<option value="Não">No</option>
						</select>
						<br><br>
					</div>
				</div>
				<h3 class="Titulo">School education</h3>
				<div class="form-row">
					<div class="form-group col-md-11"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="formacao">Describe the Training</label><br><!--Rotulo-->
						<textarea name="txtformacao" rows="4" class="form-control" id="formacao"placeholder="Enter your training, for example: Complete High School, Completed Human Resources Technician and System Development Technician Attending." required></textarea>
						<br><br>
					</div>
				</div>
				<h3 class="Titulo">Professional Experiences</h3>
				<div class="form-row">
					<div class="form-group col-md-11"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="experiencia">Last company</label><br><!--Rotulo-->
						<input type="text" name="txtexperiencia" id="experiencia" class="form-control" placeholder="Enter the last company name" required><!--Caixa de texto-->
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-5"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Cargo">Office</label><br><!--Rotulo-->
						<input type="text" name="txtcargo" id="Cargo" class="form-control" placeholder="Job name" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-3"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="DataEntrada">Entry date</label><br><!--Rotulo-->
						<input type="text" name="txtdataentrada" id="DataEntrada" class="form-control" required><!--Caixa de texto-->
					</div>
					<div class="form-group col-md-3"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<label for="Data_Saida">Departure date</label><br><!--Rotulo-->
						<input type="text" name="txtdatasaida" id="Data_Saida" class="form-control" required><!--Caixa de texto-->
						<br><br>
					</div>
				</div>
				<h3 class="Titulo">Curriculum Attachment</h3>
				<div class="form-row">
					<div class="form-group col-md-11"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<input type="hidden" name="enviou" value="1">
						<label for="curriculo">Curriculum em PDF</label><br><!--Rotulo-->
						<input type="file" accept="Curriculo/*" class="form-control" name="arquivo" id="curriculo" required>
						<br><br>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-offset-4"> <!--Formata determinado grupo de elementos e colocado lado a lado-->
						<input type="submit" id="botao" class="btn btn-lg btn-primary"value="Send information" name="submit">
				</div>
			</div>
        </form>
    </div>
    </div>
    <br><br><br><br>
    <script type="text/javascript">
    	$("#txtemail").change(function(){
        $.ajax({
          url: "validaemail.php",
          type: "POST",
          data: {
            txtemail: $("#txtemail").val(),
          }
        }).done(function (resposta) {
      $( "#msg" ).html(resposta);
      });
     })
    </script>
</body>
<?php include 'rodape.html';?>
</html>

