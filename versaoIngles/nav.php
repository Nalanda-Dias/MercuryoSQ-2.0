<nav class="navbar navbar-default" style="height: 70px; background-color:#ade8f4; border: #ade8f4 ;">
  <div class="container-fluid" style="background-color:#ade8f4;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="height:70px;">
         <a class="navbar-brand" href="#" >
          <img src="imagens/Logo.png" alt="" width="70" height="40" class="d-inline-block align-text-top">
        </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav" style="margin-left: 50px; margin-top: 10px; ">
        <li><a style="color: black;" href="index.php">Home <span class="sr-only"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; background-color:#ade8f4;">About Us<span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#ade8f4; border: #ade8f4 ;">
            <li><a style="color: black; background-color:#ade8f4;" href="nossahistoria.php">Our story</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a style="color: black; background-color:#ade8f4;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#ade8f4; border: #ade8f4 ;">
            <li><a style="color: black;background-color:#ade8f4;" href="servicos.php">Services</a></li>
            <li><a style="color: black; background-color:#ade8f4;" href="cliente.php">Customers</a></li>
            <li><a style="color: black; background-color:#ade8f4;" href="parceiros.php">Partners</a></li>
          </ul>
        </li>
        <li><a style="color: black; background-color:#ade8f4;" href="faq.php">FAQ</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;background-color:#ade8f4;" >
        <li class="dropdown">
          <a style="color: black; background-color:#ade8f4; margin-left: 65px; margin-right: -10px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Contact<span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#ade8f4;">
            <li><a style="color: black; background-color:#ade8f4;" href="trabalheConosco.php">Work with us</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="color: black; background-color:#ade8f4;" href="localizacao.php">Location</a></li>
          </ul>
        </li>
        <!--Se a sessao estiver vazia mostra o login-->
        <?php if(empty($_SESSION['ID'])) {?>
        <li><a href="login.php" style="color: black; background-color:#ade8f4; margin-left: 65px; margin-right: 40px;"><span class="glyphicon glyphicon-log-in"> Login</a></span></li>
        <?php }  else {
                $consulta_usuario = $conexao->query("select Nome_Usuario from tbl_usuario where Código_Usuario = '$_SESSION[ID]' ");
                $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);    
        ?>
        <li><a href="#" style="color: black; background-color:#ade8f4;"><span class="glyphicon glyphicon-user"> <?php echo $exibe_usuario['Nome_Usuario']; ?></a></span></li>

        <li><a href="orcamento.php"><button style="color: black; background-color:#ade8f4; border: none;">Budget</button></a></li>
        <li><a href="sair.php" style="color: black; background-color:#ade8f4;"><span class="glyphicon glyphicon-log-out"> Exit</a></span></li>
      <?php } ?>

        <label style=""><a href="../index.php"><img src="imagens/Brasil.png"/></a></label>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>