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
</body>
</html>