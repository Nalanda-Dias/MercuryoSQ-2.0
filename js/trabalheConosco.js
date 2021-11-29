//Mascara para a data
$(document).ready(function()
{
  $('#data_nascimento').mask('00/00/0000', {placeholder: "__/__/____"});
  $('#celular').mask('(99)99999-9999');
  $('#CEP').mask('00000-000');
  $('#DataEntrada').mask('00/00/0000', {placeholder: '__/__/____'});
  $('#Data_Saida').mask('00/00/0000', {placeholder: '__/__/____'});

})

