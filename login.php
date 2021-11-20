<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  
  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery livraria -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- JavaScript compilado-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  

  <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
  <?php
    include 'nav.php';
  ?>
  <div class="parent-login">
    <div class="well bg-white box-login"> <!--Coloca uma caixa ao redor do login-->
      <h1 class="ls-login-logo">Mercuryo S&Q</h1>
      <form  role="form">
        <fieldset>
          <div class="form-group ls-login-user"> <!--Dá um espaço entre usuario e senha-->
            <label for="userLogin">Usuário</label>
            <input class="form-control ls-login-bg-user input-lg" type="text" name="usuario" id="userLogin" aria-label="Usuário" placeholder="Usuário">
          </div>
          <div class="form-group ls-login-password">
            <label for="userPassword">Senha</label>
            <input class="form-control ls-login-bg-password input-lg " type="password" name="senha" id="UserPassword" aria-label="Senha" placeholder="Senha">
          </div>
          <a href="#" class="ls-login-forgot">Esqueci minha senha</a>
          
          <input type="submit" name="enviar" value="Entrar" class="btn btn-primary btn-lg btn-block">
          <p class="txt-center ls-login-signup">Não possui um usuário na Mercuryo?
            <a href="#">Cadastre-se agora</a>
          </p>
        </fieldset>
      </form>
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include 'rodape.html';?>
  <script src="js/login.js"></script>
</body>
</html>