// JavaScript Document
function calcular(){
	
var quantidadeCotada 	= document.getElementById('quantidade_cotada').value.replace(',','.');
var valorUnitario		= document.getElementById('valor_unitario').value.replace(',','.');
	
	// parseFloat(document.getElementById('quantidade_cotada').value faz a captura do valor do input no html, o .replace(',','.') troca a virgula por ponto pois a função não reconhece virgula como casa decimal.
    var valor1 = parseFloat(quantidadeCotada, 10);
    var valor2 = parseFloat(valorUnitario, 10);
    document.getElementById('total').value = valor1 * valor2;
}