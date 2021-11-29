var pergunta = document.getElementsByClassName("Pergunta");
var funcao;

for (funcao = 0; funcao < pergunta.length; funcao++) 
{
    pergunta[funcao].addEventListener("click", function() 
    {
    	this.classList.toggle("active");
    	var Respostas = this.nextElementSibling;
        if (Respostas.style.maxHeight) 
        {
            Respostas.style.maxHeight = null;
        } else {
                    Respostas.style.maxHeight = Respostas.scrollHeight + "px";
               } 
    });
}