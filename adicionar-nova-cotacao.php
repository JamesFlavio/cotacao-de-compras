<div>
	<form class="navbar-form navbar-left" role="search">
		<div class="form-group"><input class="form-control" type="text" placeholder="Pesquisar" /></div>
		<select id="selectfornecedor"  class="form-control">
			<option>Selecione um fornecedor</option>
	
	
	
	<?php

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
	$sqlCotacao				= "SELECT DISTINCT id, razao_social FROM fornecedores;";
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
	</select>
		<button class="btn btn-default glyphicon glyphicon-plus" type="submit"></button>
	</form>
	<div>
	Fornecedor(es) participante(s)
	</div>
</div>