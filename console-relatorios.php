<div class="">
<?php 

$hostMysql		= "169.254.27.210";  //Endereço ip do banco de dados
$bdnameMysql	= "emporioa_desenvolvimento";  //Nome do banco de dados
$userMysql		= "usuario"; //Usuário de acesso ao banco de dados
$passwordMysql	= "senha"; //Senha de acesso ao banco de dados
	
	
$conexaoMysql = mysqli_connect($hostMysql,$userMysql,$passwordMysql,$bdnameMysql); // Conecta com o banco

// Checa conexão
if (mysqli_connect_errno()){
  echo "<br><br><br>Erro na conexão MySQL: " . mysqli_connect_error() . "<br><br><br>";
}

// Executa SELECT na tabela
$sqlCotacao				= "SELECT * FROM cotacao_de_compras";
$resultadoMysqlCotacao	= mysqli_query($conexaoMysql, $sqlCotacao);

// Lista cotações
if (mysqli_num_rows($resultadoMysqlCotacao) > 0) {
    // output data of each row
    while($rowMysqlCotacao = mysqli_fetch_assoc($resultadoMysqlCotacao)) {

		// Faz captura de campos
		$id				= $rowMysqlCotacao["id"];
		$situacao		= $rowMysqlCotacao["situacao"];
		$data_de_criacao= $rowMysqlCotacao["data_de_criacao"];
		
		if($situacao = 0){
			$situacao_descrita = "Cancelada";
		} else if ($situacao = 1) {
			$situacao_descrita = "Em andamento";
		} else if ($situacao = 2) {
			$situacao_descrita = "Concluída";
		}
		
		echo "$situacao_descrita - $id - $data_de_criacao <br><br>"; 
		
	}
}
?>
</div>