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
