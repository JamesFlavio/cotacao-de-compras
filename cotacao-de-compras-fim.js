		// Exibe e oculta os itens e valores de acordo com o fornecedor selecionado no SELECT dos fornecedores no cabeçalho da página.
		var select = document.getElementById("selectfornecedor");		// Captura o select que executara as ações
		var linhas = document.querySelectorAll('.trfornecedor');	// Captura todas as linhas que serão trabalhadas

		select.onchange = function () {
			for (var i = 0; i < linhas.length; i++) linhas[i].style.display = 'none';	// Oculta todas as linhas de todos fornecedores
			var divID = select.options[select.selectedIndex].value;								// Captura valor do select
			var div = document.getElementById(divID);
			div.style.display = '';
			
		};