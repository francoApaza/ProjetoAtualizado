<!DOCTYPE html>
<htm lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <title> produtos - Full Stack Eletro </title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <script src="projeto_javascript/funcoes.js"></script>
  </head>

  <body>
      <!-- menu -->
       <?php
        include('menu.html');
    ?>
    <header>
      <h2>Produtos</h2>
    </header>

    <main class="mainProdutos">

      <aside class="categorias">
        <h3>Categorias</h3>
        <ul>
          <li onclick="exibir_todos()"><b>Todos (12)</b></li>
          <li onclick="exibir_categoria('geladeira')"> Geladeiras (3)</li>
          <li onclick="exibir_categoria('fogao')"> Fogões (2)</li>
          <li onclick="exibir_categoria('microondas')"> Microondas (3)</li>
          <li onclick="exibir_categoria('lavaroupas')"> Lavadora de roupas (2)</li>
          <li onclick="exibir_categoria('lavaloucas')"> Lava-louças (2)</li>

          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>
     


        </ul>
      </aside>

      <section class="produtos">

        <div class="box_produto" id="geladeira" style="display: flex;">
          <img src="./imagens/geladeira_personalizada.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição">Geladeira personalizada free Side inverse 540 litros</p>
          <hr>
          <p class="descrição"><strike>R$ 6.399,00</strike><br> </p>
          <p class="preco">R$ 5.019,00</p>
        </div>

        <div class="box_produto" id="geladeira" style="display: flex;">
          <img src="./imagens/geladeira_electrolux.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição"> Geladeira Electrolux Infinity DF8 2 Frost Free Duas Portas 553 Litros - Branca </p>
          <hr>
          <p class="descrição"><strike> R$ 4.500,00 </strike><br> </p>
          <p class="preco"> R$ 3.999,00 </p>
        </div>


        <div class="box_produto" id="geladeira" style="display: flex;">
          <img src="./imagens/geladeira_consul.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição"> Geladeira Consul Frost Free Duplex 405 litros cor Inox com Filtro Bem Estar </p>
          <hr>
          <p class="descrição"><strike> R$ 5.500,00 </strike><br> </p>
          <p class="preco">R$ 4.999,00 </p>
        </div>

        <div class="box_produto" id="fogao" style="display: flex;">
          <img src="imagens/fogao_esmaltec.jpg" width="100px" onclick="destaque(this)">
          <br>
          <p class="descrição">Fogão de Piso 4 Bocas Esmaltec Preto, Acendimento Automático - Bivolt</p>
          <hr>
          <p class="descrição"><strike>R$ 2.500,00</strike><br> </p>
          <p class="preco">R$ 2.299,00</p>
        </div>


        <div class="box_produto" id="fogao" style="display: flex;">
          <img src="./imagens/fogao_electrolux.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição">Fogão 5 Bocas Electrolux Prata Automático com Grill e Tripla Chama (76GSR)</p>
          <hr>
          <p class="descrição"><strike>R$ 4.399,00</strike><br> </p>
          <p class="preco">R$ 3.019,00</p>
        </div>

        <div class="box_produto" id="lavaroupas" style="display: flex;">
          <img src="./imagens/lavadoura_philco.jpg" width="120px" onclick="destaque(this)">
          <br>
          <br>
          <p class="descrição"> Lavadora de Roupas Philco Inverter 12KG PLR12B </p>
          <hr>
          <p class="descrição"><strike> R$ 6.399,00 </strike><br> </p>
          <p class="preco"> R$ 5.019,00 </p>
        </div>

        <div class="box_produto" id="lavaroupas" style="display: flex;">
          <img src="./imagens/lavadoura_samsung.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição"> Lava & Seca Samsung WD4000 de 10.2kg </p>
          <hr>
          <p class="descrição"><strike> R$ 4.500,00 </strike><br> </p>
          <p class="preco"> R$ 3.999,00 </p>
        </div>

        <div class="box_produto" id="lavaloucas" style="display: flex;">
          <img src="./imagens/lava_louca_facilite.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição">Lava-louças pra família pequena Facilite sua vida com a máquina lava-louça 8 serviços</p>
          <hr>
          <p class="descrição"><strike> R$ 12.300,00 </strike><br> </p>
          <p class="preco">R$ 11.999,00 </p>
        </div>

        <div class="box_produto" id="lavaloucas" style="display: flex;">
          <img src="./imagens/lava_louca_electrolux.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição"> Electrolux Lava-Louças Inox 14 Serviços (LV14X)·Marca Electrolux </p>
          <hr>
          <p class="descrição"><strike> R$ 5.500,00 </strike><br> </p>
          <p class="preco"> R$ 3.899,00 </p>
        </div>


        <div class="box_produto" id="microondas" style="display: flex;">
          <img src="./imagens/micro_ondas_morphy.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição"> Micro-ondas MORPHY RICHARDS 20 L </p>
          <hr>
          <p class="descrição"><strike> R$ 4.500,00 </strike><br> </p>
          <p class="preco"> R$ 3.999,00 </p>
        </div>


        <div class="box_produto" id="microondas" style="display: flex;">
          <img src="./imagens/micro_ondas_electrolux.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição"> Micro-ondas Electrolux 27 L , Função Tira Odor Prata - MS37R </p>
          <hr>
          <p class="descrição"><strike> R$ 3.500,00 </strike><br> </p>
          <p class="preco"> R$ 2.999,00 </p>
        </div>

        <div class="box_produto" id="microondas" style="display: flex;">
          <img src="./imagens/micro_ondas_philco.jpg" width="120px" onclick="destaque(this)">
          <br>
          <p class="descrição"> Micro-ondas Philco 30 Litros PME31 </p>
          <hr>
          <p class="descrição"><strike> R$ 4.900,00 </strike><br> </p>
          <p class="preco"> R$ 4.399,00 </p>
        </div>

      </section>

    </main>


    <br><br><br><br><br>
    <br><br><br><br><br>


    <footer id="rodape">
      <p id="formas_pagamento">Formas de pagamento</p>
      <img src="./imagens/formasdepagamento.png" alt="Formas de pagamento">
      <p>&copy; Recode Pro</p>
    </footer>

  </body>

  </html>