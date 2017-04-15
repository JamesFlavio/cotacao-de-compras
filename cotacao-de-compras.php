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
	    <td>9</td>
	    <td class="text-left">Impressora Térmica Elgin i9 USB</td>
	    <td>10</td>
	    <td >1</td>
	    <td><input type="text" value="9" size="5" class="form-control text-center" /></td>
	    <td>
          <div class="input-group">
          <span class="input-group-addon">R$</span>
          <input type="text" class="form-control" value="140,00" size="7"/>
          </div>
        </td>
	    <td>
          <div class="input-group">
          <span class="input-group-addon">R$</span>
          <input type="text" class="form-control" value="1260,00" size="7"/>
          </div>
        </td>
      </tr>
	  <tr  class="text-center">
	    <td>10</td>
	    <td class="text-left">Impressora Térmica Epson TMT-20 USB</td>
	    <td>10</td>
	    <td >2</td>
	    <td><input type="text" value="8" size="5" class="form-control text-center" /></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="130,00" size="7"/>
	      </div></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="1040,00" size="7"/>
	      </div></td>
      </tr>
	  <tr  class="text-center">
	    <td>11</td>
	    <td class="text-left">Impressora Térmica Daruma DR-800 c/ Guilhotina USB</td>
	    <td>10</td>
	    <td >3</td>
	    <td><input type="text" value="7" size="5" class="form-control text-center" /></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="120,00" size="7"/>
	      </div></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="840,00" size="7"/>
	      </div></td>
      </tr>
	  <tr  class="text-center">
	    <td>12</td>
	    <td class="text-left">Impressora Térmica Bematech MP-4200 USB</td>
	    <td>10</td>
	    <td >4</td>
	    <td><input type="text" value="6" size="5" class="form-control text-center" /></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="110,00" size="7"/>
	      </div></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="660,00" size="7"/>
	      </div></td>
      </tr>
	  <tr  class="text-center">
	    <td>13</td>
	    <td class="text-left">Leitor de Código de Barras Quickscan QW-2120 USB</td>
	    <td>10</td>
	    <td >5</td>
	    <td><input type="text" value="5" size="5" class="form-control text-center" /></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="100,00" size="7"/>
	      </div></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="500,00" size="7"/>
	      </div></td>
      </tr>
	  <tr  class="text-center">
	    <td>14</td>
	    <td class="text-left">Bobina Térmica Maxprint 80x40 Am c/ 30 Und.</td>
	    <td>10</td>
	    <td >6</td>
	    <td><input type="text" value="4" size="5" class="form-control text-center" /></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="90,00" size="7"/>
	      </div></td>
	    <td><div class="input-group"> <span class="input-group-addon">R$</span>
	      <input type="text" class="form-control" value="360,00" size="7"/>
	      </div></td>
      </tr>
  </table>
<hr>
  <table class="table-condensed table-hover table-striped" align="center">
    <tr>
      <th colspan="5" class="text-center text-danger text-uppercase">Melhores preços por fornecedor</th>
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
    <td colspan="5" bgcolor="#dff0d8">Valor Total: R$3800,00</td>
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
      <td colspan="5" bgcolor="#dff0d8">Valor Total: R$600,00</td>
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
    <tr  class="text-center">
      <td>--</td>
      <td class="text-left">-------------------------</td>
      <td>---------------</td>
      <td>----------------</td>
      <td>-------</td>
    </tr>
  </table>
</div>
<div class="container">
  <article>
    <h1>Documentação</h1>
    <h2>Utilidade do projeto</h2>
    <p>Este projeto tem a finalidade de em meio a alguns fornecedores selecionados, cotar produtos/servisos a serem executados e no final do processo, ele lista qual dos fornecedores tiveram os melhores preços.</p>
    <h2>Funcionalidades</h2>
    <h3>COTAÇÃO DE COMPRAS</h3>
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
    <h3>MELHORES PREÇOS POR FORNECEDOR</h3>
    <p>Mostra na melhor ordem qual fornecedor ganhou e em qual item.</p>
  </article>
</div>
</body>
</html>