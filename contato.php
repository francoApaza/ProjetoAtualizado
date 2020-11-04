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
    //ligação do  cite com o banco de dados enviando informação 

  if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentarios (nome, msg ) values('$nome', '$msg')";
    $result = $conn->query($sql);
  }

?>


<!DOCTYPE html>
<htm lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <title> Contato - Full Stack Eletro </title>  
      <link rel="stylesheet" href="./CSS/estilo.css">
    </head>
    <body>
      
      <!-- menu-->

    <?php
        include('menu.html');
    ?>
     
       <h2>Fale Conosco</h2>
       <hr><br><br>
       <table border=0 width="100%" cellpadding="20">
          <tr>
            <td width="50%" align="center">
              <img src="./imagens/E-mail.png" width="40px">
              <font face="arial" size="4">  Contato@fullstackeletro.com </font>        
            </td>

            <td width="50%" align="center">
                <img src="./imagens/whatspp.png" width="50px">
              <font face="arial" size="4"> (11) 99999-5555</font>
            </td>
          </tr>
       </table>

       <form method="post" action="" class="contato">
         <h4> Nome: </h4>
         <input type="text" name="nome" style="width:400px"  placeholder="escreva seu nome aqui:">
         <h4> Mensagem:</h4>
         <input type="text" name="msg"  style="width:400px" placeholder="Deixe sua mensagem aqui: " ></input>
         <br>
         <input type="submit" name="submit" value="enviar">
       </form>
       <br><br>
      
       <!-- exibe comentarios do banco de dados  no site -->
      
       <?php
              $sql = "select * from comentarios";
              $result = $conn->query($sql);

              if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                  echo "Data: ", $rows['data'],"<br>";
                  echo "Nome: ", $rows['nome'],"<br>";
                  echo "Mensagem: ", $rows['msg'],"<br>";    
                  echo "<hr>";      
                }
              }else{
                echo "Nenhum comentário ainda!";
              }
              ?>
       <br>
       <br><br><br><br><br>
       <br><br><br><br><br>
       <br><br><br><br><br>
    

        <footer id="rodape">
          <p id="formas_pagamento">Formas de pagamento</p>
          <img src="./imagens/formasdepagamento.png" alt="Formas de pagamento"><br>
          <img src="./imagens/esquilo.jpg" alt="esquilo asustado" width="30px">
          <p>&copy; Recode Pro</p> 
        </footer>
    </body>
</html>