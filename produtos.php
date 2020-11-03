<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "fseletro";

  // Criando a conexão 
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Verificando a conexão 
  if (!$conn) {
    die("A conexão ao BD falhou : " . mysqli_connect_error());
  }

  


?>

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
          <li onclick="exibir_categoria('micro-ondas')"> Micro-ondas (3)</li>
          <li onclick="exibir_categoria('lavadora')"> Lavadora de roupas (2)</li>
          <li onclick="exibir_categoria('lava-louca')"> Lava-louças (2)</li>

          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>

        </ul>
      </aside>
      <!-- produtos : -->
      <section class="produtos">

        <?php
            $sql = "select * from produto";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
              while($rows = $result->fetch_assoc()){
      
        ?>        

          <div class="box_produto" id="<?php  echo $rows["categoria"]; ?>" style="display: flex;">
            <img src="<?php  echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)">
            <br>
            <p class="descrição"><?php  echo $rows["descricao"]; ?></p>
            <hr>
            <p class="descrição"><strike>R$ <?php  echo $rows["preco"]; ?></strike><br> </p>
            <p class="preco">R$ <?php  echo $rows["precofinal"]; ?></p>
          </div>
          
        <?php
              }
            }else{
              echo "Nenhum produto cadastrado!";
            }
        ?>

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