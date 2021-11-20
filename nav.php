<nav class="navbar navbar-default" style="height: 70px; background-color:#ade8f4">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
         <a class="navbar-brand" href="#">
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
        <li><a href="index.php">Home <span class="sr-only"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre Nós<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nossa História</a></li>
            <li><a href="#">Conheça nossa equipe</a></li>
            <li><a href="#">Ambiente da empresa</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portifólio <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Parceiros</a></li>
          </ul>
        </li>
        <li><a href="#">FAQ</a></li>
      </ul>
    
      <form class="navbar-form navbar-left" role="search" style="margin-top: 20px;">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="O que você busca?">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;" >
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contato <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Fale Conosco</a></li>
            <li><a href="trabalheConosco.php">Trabalhe Conosco</a></li>
            <li><a href="#">Orçamento</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Localização</a></li>
          </ul>
        </li>
        <li><a href="login.php" style="color: black;"><span class="glyphicon glyphicon-log-in"> Login</a></span></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>