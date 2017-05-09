<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="James Flávio Nunes da Cruz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<!--  Javascript de funções para este documento -->

<title>Empório Automação Comercial & Consultoria</title>
</head>

<body>		
	<div class="container-fluid">
 <form id="COTACAODECOMPRAS">
  <table class="table-condensed" align="center">
	  <tr>
	    <th class="text-center text-danger text-uppercase">Cotação de Compra</th>
	  </tr>
	  <tr>
	    <th class="text-danger text-uppercase">
		  <select id="selectfornecedor">
		  <option>Selecione um fornecedor</option>
	      <?php
/*
	$hostMysql		= "181.41.198.253";  //Endereço ip do banco de dados
	$bdnameMysql	= "emporioa_desenvolvimento";  //Nome do banco de dados
	$userMysql		= "emporioa"; //Usuário de acesso ao banco de dados
	$passwordMysql	= "Euatopng"; //Senha de acesso ao banco de dados
*/
	$hostMysql		= "169.254.27.210";  //Endereço ip do banco de dados
	$bdnameMysql	= "emporioa_desenvolvimento";  //Nome do banco de dados
	$userMysql		= "usuario"; //Usuário de acesso ao banco de dados
	$passwordMysql	= "senha"; //Senha de acesso ao banco de dados
	
	
	$conexaoMysql = mysqli_connect($hostMysql,$userMysql,$passwordMysql,$bdnameMysql); // Conecta com o banco

	// Checa conexão
	if (mysqli_connect_errno())
	  {
	  echo "<br><br><br>Erro na conexão MySQL: " . mysqli_connect_error() . "<br><br><br>";
	  }

	// Executa SELECT na tabela
	$sqlCotacao				= "SELECT DISTINCT fornecedores.id, fornecedores.razao_social FROM cotacao_de_compras_participantes INNER JOIN fornecedores ON fornecedores.id = cotacao_de_compras_participantes.fornecedores_id";
	$resultadoMysqlCotacao	= mysqli_query($conexaoMysql, $sqlCotacao);

// Lista cotações
if (mysqli_num_rows($resultadoMysqlCotacao) > 0) {
    // output data of each row
    while($rowMysqlCotacao = mysqli_fetch_assoc($resultadoMysqlCotacao)) {

			// Faz captura de campos
			$id	= $rowMysqlCotacao["id"];
			$razao_social	= $rowMysqlCotacao["razao_social"];

		  ?>
	      <option value="<?php echo $id;?>"><?php echo $razao_social;?></option>
		  <?php
	}
}
		  ?>

	    </select></th>
      </tr>
	  <tr>
	    <td>
		  <table class="table-hover table-striped">
			<tr>
			  <th class="text-center">ID</th>
			  <th class="text-center">Descriçao</th>
			  <th class="text-center">Mín/Max</th>
			  <th class="text-center">Qtd Atual</th>
			  <th class="text-center">Qtd Cotada</th>
			  <th class="text-center">Valor Unitário</th>
			  <th class="text-center">Total</th>
		    </tr>
			  <?php
		// Executa SELECT na tabela
		$sql			= "
	SELECT	cotacao_de_compras_participantes.fornecedores_id AS fornecedor_id,
			cotacao_de_compras_participantes.preco,
			cotacao_de_compras_participantes.cotacao_de_compras_produtos_produtos_id AS produto_id,
			cotacao_de_compras_produtos.quantidade_cotada,
			produtos.nome
	FROM
	cotacao_de_compras_participantes
	INNER JOIN cotacao_de_compras_produtos ON cotacao_de_compras_participantes.cotacao_de_compras_produtos_produtos_id = cotacao_de_compras_produtos.produtos_id
	INNER JOIN produtos ON cotacao_de_compras_participantes.cotacao_de_compras_produtos_produtos_id = produtos.id
	ORDER BY cotacao_de_compras_participantes.fornecedores_id ASC;
		";
		$resultadoMysql	= mysqli_query($conexaoMysql, $sql);

	// Lista produto da tabela
	if (mysqli_num_rows($resultadoMysql) > 0) {
		// output data of each row
		while($rowMysql = mysqli_fetch_assoc($resultadoMysql)) {

				// Faz captura de campos
				$fornecedor_id		= $rowMysql["fornecedor_id"];
				$produto_id			= $rowMysql["produto_id"];
				$nome				= $rowMysql["nome"];
				$quantidadeCotada	= (float)$rowMysql["quantidade_cotada"];
				$preco				= (float)number_format($rowMysql["preco"],"2",",",".");
				$total				= (float)$quantidadeCotada*$preco;
			// (float) faz a conversão dos valores para que possam ser caculados posteriormente, pois se não for convertido os valores ficam sendo reconhecidos como string


	?>
		  <tr id="trfornecedor<?php echo $fornecedor_id;?>" class="trfornecedor" style="display:none;">
			<td><?php echo($fornecedor_id.".".$produto_id);?><input name="idProduto<?php echo($fornecedor_id.".".$produto_id);?>" type="hidden" id="idProduto<?php echo($fornecedor_id.".".$produto_id);?>" value="<?php echo($fornecedor_id.".".$produto_id);?>"></td>
			<td class="text-left"><?php echo $nome;?></td>
			<td>##</td>
			<td >##</td>
			<td><input name="quantidade_cotada<?php echo($fornecedor_id.".".$produto_id);?>" type="text" onKeyPress="calcular()" onblur="calcular()"class="form-control text-center" id="quantidade_cotada<?php echo($fornecedor_id.".".$produto_id);?>" value="<?php echo($quantidadeCotada);?>" size="5" /></td>
			<td>
			  <div class="input-group">
			  <span class="input-group-addon">R$</span>
			  <input name="valor_unitario<?php echo($fornecedor_id.".".$produto_id);?>" type="text" onKeyPress="calcular()" onblur="calcular()" class="form-control" id="valor_unitario<?php echo($fornecedor_id.".".$produto_id);?>" value="<?php echo($preco);?>" size="7"/>
			  </div>
			</td>
			<td>
			  <div class="input-group">
				<span class="input-group-addon">R$</span>
				<input name="teste" type="text" class="form-control teste<?php echo $fornecedor_id;?>" id="total<?php echo($fornecedor_id.".".$produto_id);?>" value="<?php echo($total);?>" size="7"/>
			  </div>
			</td>
		  </tr>
	<?php
		}
	}
	?>
			<tr>
			  <td><br></td>
			</tr>
			<tr>
			  <td colspan="7" class="text-center text-danger text-uppercase">Valor:<div id="valorTotal">R$0,00</div></td>
			</tr>
		  </table>
		</td>
	  </tr>
  </table>
 </form>

	<script type="text/javascript" src="cotacao-de-compras.js"></script>

 <hr>
  <table class="table-condensed table-hover table-striped" align="center">
    <tr>
      <th colspan="5" class="text-center text-danger text-uppercase">Melhores preços por fornecedor</th>
	</tr>
    <tr>
      <th colspan="5" class="text-danger">Fornecedor 01</th>
    </tr>
	<tr>
    <th>ID</th>
    <th>Descriçao</th>
    <th>Qtd Cotada</th>
    <th>Valor Unitário</th>
    <th>Total</th>
  </tr>
	<tr  class="text-center">
    <td>9</td>
    <td class="text-left">Impressora Térmica Elgin i9 USB</td>
    <td>9</td>
    <td>R$140,00</td>
    <td>R$1260,00</td>
  </tr>
	<tr  class="text-center">
    <td>10</td>
    <td class="text-left">Impressora Térmica Epson TMT-20 USB</td>
    <td>8</td>
    <td>R$130,00</td>
    <td>R$1040,00</td>
  </tr>
	<tr  class="text-center">
    <td>11</td>
    <td class="text-left">Impressora Térmica Daruma DR-800 c/ Guilhotina USB</td>
    <td>7</td>
    <td>R$120,00</td>
    <td>R$840,00</td>
  </tr>
	<tr  class="text-center">
    <td>12</td>
    <td class="text-left">Impressora Térmica Bematech MP-4200 USB</td>
    <td>6</td>
    <td>R$110,00</td>
    <td>R$660,00</td>
	</tr>
	<tr  class="text-center">
      <td colspan="5">&nbsp;</td>
	</tr>
	<tr  class="text-center">
      <td colspan="5" bgcolor="#dff0d8"><strong>Valor Total: R$3800,00</strong></td>
	</tr>
  </table>
  <br>
  <table class="table-condensed table-hover table-striped" align="center">
    <tr>
      <th colspan="5" class="text-danger">Fornecedor 02</th>
    </tr>
    <tr>
      <th>ID</th>
      <th>Descriçao</th>
      <th>Qtd Cotada</th>
      <th>Valor Unitário</th>
      <th>Total</th>
    </tr>
    <tr  class="text-center">
      <td>13</td>
      <td class="text-left">Leitor de Código de Barras Quickscan QW-2120 USB</td>
      <td>5</td>
      <td>R$80,00</td>
      <td>R$400,00</td>
    </tr>
    <tr  class="text-center">
      <td>14</td>
      <td class="text-left">Bobina Térmica Maxprint 80x40 Am c/ 30 Und.</td>
      <td>4</td>
      <td>R$50,00</td>
      <td>R$200,00</td>
    </tr>
    <tr  class="text-center">
      <td colspan="5">&nbsp;</td>
    </tr>
    <tr  class="text-center">
      <td colspan="5" bgcolor="#dff0d8"><strong>Valor Total: R$600,00</strong></td>
    </tr>
  </table>
  <br>
  <table class="table-condensed table-hover table-striped" align="center">
    <tr>
      <th colspan="5" class="text-danger">Fornecedor 03</th>
    </tr>
    <tr>
      <th>ID</th>
      <th>Descriçao</th>
      <th>Qtd Cotada</th>
      <th>Valor Unitário</th>
      <th>Total</th>
    </tr>
    <tr class="text-center">
      <td>--</td>
      <td class="text-left">-------------------------</td>
      <td>---------------</td>
      <td>----------------</td>
      <td>-------</td>
    </tr>
  </table>
  <hr>
</div>
<div id="documentacao" class="container">
  <article>
    <h1>Documentação</h1>
    <h2>Utilidade do projeto</h2>
    <p>Este projeto tem a finalidade de em meio a alguns fornecedores selecionados, cotar produtos/servisos a serem executados e no final do processo, ele lista qual dos fornecedores tiveram os melhores preços.</p>
    <h2>Funcionalidades</h2>
    <h3>COTAÇÃO DE COMPRAS</h3>
    <dl class="dl-horizontal">
      <dt>Fornecedor:</dt>
      <dd>Ao ser selecionado o fornecedor X, os itens abaixo são atualizados com os preoçs fornecidos pelo mesmo, ocultando os demais possivelmente com a função hidden em uma div.</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>ID:</dt>
      <dd>Número de identificação do produto na base de dados.</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>Desciçao:</dt>
      <dd>Nome do produto ou serviço a ser cotado.</dd>
    </dl>

    <dl class="dl-horizontal">
      <dt>Min/Max:</dt>
      <dd>Quantidade informada no cadastro do produto como estoque mínimo ou máximo pretendeida. Este campo será utilizado para fazer o cálculo da quantidade a ser cotada.</dd>
    </dl>

    <dl class="dl-horizontal">
      <dt>Qtd Atual:</dt>
      <dd>Quantidade de produto em estoque no momento. Este campo será utilizado para fazer o cálculo da quantidade a ser cotada.</dd>
    </dl>


    <dl class="dl-horizontal">
      <dt>Qtd Cotada:</dt>
      <dd>Este campo é feito o cálculo com base no quantidade mínima ou máxima (Min/Max) que foi informado no cadastro do produto subitraindo a quantidade atual que já temos com o cálculo <b>"Mix/Max" - Qtd Atual</b>. Podemos colocar uma quantidade maior ou menor em caso de ser feita uma cotação com quantidade diferente a que foi informada automáticamente pelo sistema.</dd>
    </dl>


    <dl class="dl-horizontal">
      <dt>Valor Unitário:</dt>
      <dd>O valor passado pelo fornecedor ou prestador de servço sobre o item que foi cotado.</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>Valor total:</dt>
      <dd>Valor total do item cotado, sendo <b>Qtd Cotada * Valor Unitário</b><p>Este campo também serve para fazer um processo inverso, se o mesmo for informado juntamente com a quantidade, ele automaticamente atualiza o preço unitário com o cálculo <b>Valor Total / Qtd Cotada</b></p>.</dd>
    </dl>
    <h4>Sobre a tabela "cotacao+de_compras_cotacao"</h4>
    <dl class="dl-horizontal">
      <dt>id:</dt>
      <dd>Indice da tabela ### VERIFICAR NECESSIDADE POSTERIORMENTE JÁ QUE TEREMOS ID DO PRODUTO E DO FORNECEDOR OFERTANDO ###.</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>id_fornecedor:</dt>
      <dd>Para referenciar o fornecedor do item cotado.</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>id_produto:</dt>
      <dd>Para referenciar o preço fornecido por X fornecedor.</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>quantidade_cotada:</dt>
      <dd>Quantidade cotada para o preço oferecido, de inicio é a quantidade indicada pelo sistema para reposição do estoque somente (quantidade_mínima - quantidade atual), mas pode ser uma outra quantidade que foi indicada manualmente na negociação.</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>preco:</dt>
      <dd>Preço informado pelo fornecedor para o item nas condições informadas.</dd>
    </dl>
    <h3>MELHORES PREÇOS POR FORNECEDOR</h3>
    <p>Mostra na melhor ordem qual fornecedor ganhou e em qual item.</p>

    <h2>Requisitos</h2>
	PHP e Banco de Dados MySQL.
  </article>
</div>
</body>
</html>