// Função para calcular os valores informados
function calcular(){	//passa o id do formulário como parâmentro

	form = document.getElementById('COTACAODECOMPRAS');
	var hiddensEncontrados =0;
	
 		for (i=0; i<form.elements.length; i++){ 	//faz um loop por todos os campos do formulário		
			if (form.elements.item(i).getAttribute('type')=="hidden"){
				
				hiddensEncontrados+=1;
				
				
var nameDoItem			= form.elements.item(i).getAttribute('id');
var idProduto			= document.getElementById(nameDoItem).value;
var quantidadeCotada	= document.getElementById('quantidade_cotada'+idProduto).value.replace(',','.');
var valorUnitario		= document.getElementById('valor_unitario'+idProduto).value.replace(',','.');
//									quantidade_cotada 9","preco_unitario 140,00","valor_total 1260,00
var dadosDoItemCotado	= new Array(quantidadeCotada,valorUnitario);
var itemCotado			= new Array(idProduto,dadosDoItemCotado);

				
			    document.getElementById('total'+idProduto).value = quantidadeCotada * valorUnitario;
				
			}		
		}	
}
