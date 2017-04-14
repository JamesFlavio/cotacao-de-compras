<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="James Flávio Nunes da Cruz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <!--  Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="cotacao-de-precos.css"  rel="stylesheet" >
<title>Empório Automação Comercial & Consultoria</title>
</head>

<body>
<div class="container-fluid">
	<table class="table-condensed table-hover table-striped" align="center">
	  <tr>
	    <th colspan="7" class="text-center text-danger text-uppercase">Cotação de Compra</th>
	  <tr>
	    <th colspan="7" class="text-danger text-uppercase"><select name="Fornecedor">
	      <option>Fornecedor 01</option>
	      <option>Fornecedor 02</option>
	      <option>Fornecedor 03</option>
	    </select></th>
      </tr>
	  <tr>
	    <th>ID</th>
	    <th>Descriçao</th>
	    <th>Mín/Max</th>
	    <th>Qtd Atual</th>
	    <th>Qtd Cotada</th>
	    <th>Valor Unitário</th>
	    <th>Total</th>
      </tr>
	  <tr  class="text-center">
	    <td>11</td>
	    <td class="text-left">Impressora Térmica Elgin i9</td>
	    <td>10</td>
	    <td >2</td>
	    <td><input type="text" value="2" size="5" class="form-control text-center" /></td>
	    <td>
          <div class="input-group">
          <span class="input-group-addon">R$</span>
          <input type="text" size="7" class="form-control"/>
          </div>
        </td>
	    <td>
          <div class="input-group">
          <span class="input-group-addon">R$</span>
          <input type="text" size="7" class="form-control"/>
          </div>
        </td>
      </tr>
	  <tr  class="text-center">
	    <td>11</td>
	    <td class="text-left">Impressora Térmica Elgin i9</td>
	    <td>10</td>
	    <td >2</td>
	    <td><input type="text" value="2" size="5" class="form-control text-center" /></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" size="7" class="form-control"/>
	      </div></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" size="7" class="form-control"/>
	      </div></td>
      </tr>
  </table>
  <table class="table-condensed table-hover table-striped" align="center">
    <tr>
      <th colspan="7" class="text-center text-danger text-uppercase">Melhores preços por fornecedor</th>
    <tr>
      <th colspan="7" class="text-danger">Fornecedor 01</th>
    </tr>
  <tr>
    <th>ID</th>
    <th>Descriçao</th>
    <th>Mín/Max</th>
    <th>Qtd Atual</th>
    <th>Qtd Cotada</th>
    <th>Valor Unitário</th>
    <th>Total</th>
  </tr>
  <tr  class="text-center">
    <td>11</td>
    <td class="text-left">Impressora Térmica Elgin i9</td>
    <td>10</td>
    <td >2</td>
    <td><input type="text" value="2" size="5" class="form-control text-center" /></td>
    <td><div class="input-group"> <span class="input-group-addon">R$</span>
      <input type="text" size="7" class="form-control"/>
    </div></td>
    <td><div class="input-group"> <span class="input-group-addon">R$</span>
      <input type="text" size="7" class="form-control"/>
    </div></td>
  </tr>
  <tr  class="text-center">
    <td>11</td>
    <td class="text-left">Impressora Térmica Elgin i9</td>
    <td>10</td>
    <td >2</td>
    <td><input type="text" value="2" size="5" class="form-control text-center" /></td>
    <td><div class="input-group"> <span class="input-group-addon">R$</span>
      <input type="text" size="7" class="form-control"/>
    </div></td>
    <td><div class="input-group"> <span class="input-group-addon">R$</span>
      <input type="text" size="7" class="form-control"/>
    </div></td>
  </tr>
  </table>
</div>
<div class="container">
  <article>
    <h1>Documentação</h1>
    <h2>Utilidade do projeto</h2>
    <p>Este projeto tem a finalidade de em meio a alguns fornecedores selecionados, cotar produtos/servisos a serem executados e no final do processo, ele lista qual dos fornecedores tiveram os melhores preços.</p>
    <h2>Funcionalidades</h2>
    <dl class="dl-horizontal">
      <dt>Qtd Cotada:</dt>
      <dd>Neste campo citamos a quantidade que iremos cotar de cada produto ou qual quantidade foi informada pelo fornecedor para quele preço informado.</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>Valor Unitário:</dt>
      <dd>O valor passado pelo fornecedor ou prestador de servço sobre o item que foi cotado.</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>Valor total:</dt>
      <dd>Valor total do item cotado, sendo <b>Qtd Cotada * Valor Unitário</b><p>Este campo também serve para fazer um processo inverso, se o mesmo for informado juntamente com a quantidade, ele automaticamente atualiza o preço unitário com o cálculo <b>Valor Total / Qtd Cotada</b></p>.</dd>
    </dl>
  </article>
</div>
<table>
  <tr>
    <td>
    
<form class="form-horizontal">
  <div class="form-group has-success has-feedback">
    <label class="control-label col-sm-3" for="inputSuccess3">Entrada com successo</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status">
      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
      <span id="inputSuccess3Status" class="sr-only">(successo)</span>
    </div>
  </div>
  <div class="form-group has-success has-feedback">
    <label class="control-label col-sm-3" for="inputGroupSuccess2">Grupo de entrada com successo</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="text" class="form-control" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
      </div>
      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
      <span id="inputGroupSuccess2Status" class="sr-only">(successo)</span>
    </div>
  </div>
</form>
</td>
  </tr>
  <tr>
    <td>
<form class="form-inline">
  <div class="form-group has-success has-feedback">
    <label class="control-label" for="inputSuccess4">Entrada com successo</label>
    <input type="text" class="form-control" id="inputSuccess4" aria-describedby="inputSuccess4Status">
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
    <span id="inputSuccess4Status" class="sr-only">(successo)</span>
  </div>
</form>
<form class="form-inline">
  <div class="form-group has-success has-feedback">
    <label class="control-label" for="inputGroupSuccess3">Grupo de entrada com successo</label>
    <div class="input-group">
    <span class="input-group-addon">@</span></div>
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
    <span id="inputGroupSuccess3Status" class="sr-only">(successo)</span>
  </div>
</form>
    </td>
  </tr>
  <tr>
    <td>

<div class="form-group has-success has-feedback">
  <label class="control-label sr-only" for="inputSuccess5">Etiqueta oculta</label>
  <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status">
  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  <span id="inputSuccess5Status" class="sr-only">(successo)</span>
</div>
<div class="form-group has-success has-feedback">
  <label class="control-label sr-only" for="inputGroupSuccess4">grupo de entrada com successo</label>
  <div class="input-group">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
  </div>
  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  <span id="inputGroupSuccess4Status" class="sr-only">(successo)</span>
</div>
    
    </td>
  </tr>
</table>


</body>
</html>