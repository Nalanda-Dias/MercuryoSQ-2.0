  //Mostrar e ocultar
      var cont = document.querySelector('div');
      var input = document.querySelector('#senha');
      var icon = document.querySelector('img');

      icon.addEventListener('click', function() 
      {
        cont.classList.toggle('visible');
        if(cont.classList.contains('visible'))
        {
          icon.src = 'imagens/eye-off.svg';
          input.type = 'text';
        } else {
          icon.src = 'imagens/eye.svg';
          input.type = 'password';
        }
      });

     //botões de animação
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container");

      sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
      });

      sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
      });

      $("#enviar").change(function(){
        $.ajax({
          url: "validausuario.php",
          type: "POST",
          data: {
            usuario: $("#usuario").val(),
            senha: $("#senha").val(),
          }
        }).done(function (resposta) {
      $( "#msg" ).html(resposta);
      });
     })