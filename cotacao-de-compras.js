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




// Função para Mostrar ou Ocultar linhas do preços dos fornecedores de acordo com o select

		// Exibe e oculta os itens e valores de acordo com o fornecedor selecionado no SELECT dos fornecedores no cabeçalho da página.
		var select = document.getElementById("selectfornecedor");		// Captura o select que executara as ações
		var linhas = document.querySelectorAll('.trfornecedor');	// Captura linhas que serão trabalhadas

		select.onchange = function () {
			for (var i = 0; i < linhas.length; i++) linhas[i].style.display = 'none';	// Oculta todas as linhas de todos fornecedores
			var divID = select.options[select.selectedIndex].value;						// Captura valor do select
			var div = document.getElementById(divID);
			var linhasFornecedorX = document.querySelectorAll("#"+divID);				// Captura linhas do fornecedor X
			for (var i2 = 0; i2 < linhasFornecedorX.length; i2++) linhasFornecedorX[i2].style.display = '';	// Captura linhas do FornecedorX a ser trabalhada
			
		};