//innerHTML = Pega o html que estar dentro do elemento 
//split = divide o texto em diversas partes, com parametros divide em palavras, se não tiover nada, separa em letras
//Criando a função para animação
function typeWrite(elemento)
{
 	var textoArray = elemento.innerHTML.split(''); //pegar cada letra do texto e colocar entro de uma array
 	elemento.innerHTML = '';
 	textoArray.forEach((letra, i) => {
 		setTimeout(() => elemento.innerHTML += letra, 75 * i); //setTimeout = defini o tempo de cada letra
 	}); //forEach = para cada e o => é igual uma função
}

//Criando variavel para pegar a frase do index / h1
var Titulo = document.querySelector('h1');
typeWrite(Titulo);
typeWrite(document.querySelector('p'));