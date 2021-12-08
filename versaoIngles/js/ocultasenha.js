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