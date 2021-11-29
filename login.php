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
  

  <link rel="stylesheet" type="text/css" href="css/log.css">

</head>
<body>
 

  <section class="parent-login">
    <section class="well bg-white box-login">
      <h1 class="ls-login-logo">Mercuryo S&Q</h1>
      <form  role="form">
        <fieldset>
          <section class="form-group ls-login-user">
            <label for="userLogin">Usuário</label>
            <input class="form-control ls-login-bg-user input-lg" type="text" name="usuario" id="userLogin" aria-label="Usuário" placeholder="Usuário">
          </section>
          <div class="form-group ls-login-password">
            <label for="userPassword">Senha</label>
            <input class="form-control ls-login-bg-password input-lg" type="password" name="password" id="UserPassword" placeholder="Senha">
            <img src="imagens/eye.svg" alt="" class="eye">
          </div>
          <a href="#" class="ls-login-forgot">Esqueci minha senha</a>
          
          <input type="submit" name="enviar" value="Entrar" class="btn btn-primary btn-lg btn-block">
          <p class="txt-center ls-login-signup">Não possui um usuário na Mercuryo?
            <a href="#">Cadastre-se agora</a>
          </p>
        </fieldset>
      </form>
    </section>
  </section>

  <script>
    var container = document.querySelector('div');
    var input = document.querySelector('#UserPassword');
    var icon = document.querySelector('img');

    icon.addEventListener('click', function() 
    {
      container.classList.toggle('visible');
      if(container.classList.contains('visible'))
      {
        icon.src = 'imagens/eye-off.svg';
        input.type = 'text';
      } else {
        icon.src = 'imagens/eye.svg';
        input.type = 'password';
      }
    });
  </script>
  <?php include 'nav.php';?>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br>
  <?php include 'rodape.html';?>
</body>
</html>