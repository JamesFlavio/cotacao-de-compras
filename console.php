<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="James Flávio Nunes da Cruz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<!--  jQuery -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<!--  Javascript de funções para este documento -->
    <script src="js/bootstrap.js" type="text/javascript"></script>

<title>Empório Automação Comercial & Consultoria</title>
</head>

<body>		
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
 
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
				<span class="sr-only">Toggle navigation</span> 
			</button> 
			<a class="navbar-brand" href="console.php">Cotação de Compras</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group"><input class="form-control" type="text" placeholder="Pesquisar" /></div>
				<button class="btn btn-default glyphicon glyphicon-pencil" type="submit"></button>
				<button class="btn btn-default glyphicon glyphicon-plus" type="submit"></button>
			</form>
			
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Telas <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#" onclick="$('#centro').load('cotacao-de-compras.php');" >Cotação</a></li>
						<li><a href="#" onclick="$('#centro').load('melhores-precos-por-fornecedores.php');">Ranking</a></li>
						<li><a href="#">Vencedor(es)</a></li>
						<li class="divider"></li>
						<li><a href="#" onclick="$('#centro').load('documentacao.php');">Documentação</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>
<div id="centro" class="container">
Centro
</div><!-- /.container -->
</body>
</html>