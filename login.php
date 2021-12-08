<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- JavaScript compilado-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/Login.css" />

</head>
  <body>
    <?php  
      include 'conexao.php';
    ?>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="validausuario.php" method="post" name="login"  class="sign-in-form">
            <h2 class="title">Login</h2>
            <p id="msg" style="color:red; font-size: 15px;"></p>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="usuario" id="usuario" placeholder="Usuário" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="senha" id="senha" placeholder="Senha" required />
              <img src="imagens/eye.svg" alt="" class="eye">
            </div>
            <div class="row">
              <button type="submit" id="oi" class="btn solid">
                <a id="voltar" href="index.php">Voltar</a>
              </button>
              <input type="submit" name="enviar" id="enviar" value="Entrar" class="btn btn-primary btn-lg btn-block">
            </div>
          </form>
          <form action="cadastrausuario.php" method="post" enctype="multipart/form-data"  class="sign-up-form">
            <h2 class="title">Cadastra-se</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="txtemail" placeholder="Email" required />
            </div>
             <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="txtnome" placeholder="Nome" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="txtusuario" placeholder="Usuário" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="senha" id="idsenha" placeholder="Senha" required />
            </div>
           <div class="row">
              <button type="submit" id="oi" class="btn solid">
                <a id="voltar" href="index.php">Voltar</a>
              </button>
              <input type="submit" value="Cadastrar" class="btn solid" />
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo aqui ?</h3>
            <p>
              Cadastre-se no nosso site e faça um orçamento conosco !!!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Cadastra-se
            </button>
          </div>
          <img src="imagens/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Um de nós ?</h3>
            <p>
              Faça o login e realize o seu orçamento.
            </p>
            <button class="btn transparent" id="sign-in-btn">
                Login
            </button>
          </div>
          <img src="imagens/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="js/funcoes.js" ></script>
  </body>
</html>
