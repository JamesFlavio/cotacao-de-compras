// Função para calcular os valores informados
function calcular(){

	form = document.getElementById('COTACAODECOMPRAS');					//Passa o id do formulário como parâmentro
	var hiddensEncontrados =0;											//Define a variável hiddensEncontrados
	
 		for (i=0; i<form.elements.length; i++){ 						//Faz um loop por todos os campos do formulário		
			if (form.elements.item(i).getAttribute('type')=="hidden"){	//Captura os hiddens que indentificam a linha de cada produto dentro do formulário
				
				hiddensEncontrados+=1;									//Ver se está sendo usado - Incrementa mais 1 a cada hidden encontrado
				
				
var idItem				= form.elements.item(i).getAttribute('id');		//Id do item atual no loop. --- idProduto1.2 onde 1 é a Id do fonecedor e 2 a Id do produto ---
var idProduto			= document.getElementById(idItem).value;		//Captura o valor do hidden --- 1.2 onde 1 é a Id do fonecedor e 2 a Id do produto---
var quantidadeCotada	= document.getElementById('quantidade_cotada'+idProduto).value.replace(',','.');	//Captura o valor do campo quantidade_cotada e corrige a "," por ".".
var valorUnitario		= document.getElementById('valor_unitario'+idProduto).value.replace(',','.');		//Captura o valor do campo valor_unitario e corrige a "," por ".".

var dadosDoItemCotado	= new Array(quantidadeCotada,valorUnitario); // NÃO UTILIZADO
var itemCotado			= new Array(idProduto,dadosDoItemCotado); // NÃO UTILIZADO

				
			    document.getElementById('total'+idProduto).value = quantidadeCotada * valorUnitario;
				
			}
		}
}


// Função para Mostrar ou Ocultar linhas do preços dos fornecedores de acordo com o select

	// Exibe e oculta os itens e valores de acordo com o fornecedor selecionado no SELECT dos fornecedores no cabeçalho da página.
		// Captura o select que executara as ações
		// Usado nas funções Calcular Valor Total por Fornecedor e Mostrar e Ocultar
		var select = document.getElementById("selectfornecedor");	// Seleciona o select que será utilizado 
		var linhas = document.querySelectorAll('.trfornecedor');	// Captura linhas que serão trabalhadas

		select.onchange = function () {
			for (var i = 0; i < linhas.length; i++) linhas[i].style.display = 'none';			// Oculta todas as linhas de todos fornecedores
			
			var selectValue			= select.options[select.selectedIndex].value;				// Captura valor selecionado do select que é a Id do fornecedor 
			var linhasFornecedorX	= document.querySelectorAll("#trfornecedor"+selectValue);	// Captura linhas do fornecedor X pelo ID da linha TR
			
			for (var i = 0; i < linhasFornecedorX.length; i++) linhasFornecedorX[i].style.display = '';	// Exibe linhas do FornecedorX selecionado
			
		
		
		
		// Função para calcular o Valor Total por Fornecedor e atualizar a exibição no fim da tela

			// Seleciona todos campos VALOR TOTAL-ITEM do Fornecedor X --- Multiplicalos --- 
			var inputValorTotal	= document.querySelectorAll(".teste"+selectValue);	// Captura input de valor total do item do fornecedor selecionado
			var valorTotalFornecedor = 0;
			
			for (var i = 0; i < inputValorTotal.length; i++) { 	// Soma todos os valores dos inputs de valor total
				valorTotalFornecedor = Number(inputValorTotal[i].value) + valorTotalFornecedor;
			}
			// atualizar a div totalGeral
			document.getElementById("valorTotal").innerHTML = valorTotalFornecedor;

		};
