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
       <hr>
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

       <form class="contato">
         <h4> Nome: </h4>
         <input type="text" style="width: 400px;" placeholder="escreva seu nome aqui:">
         <h4> Mensagem:</h4>
         <textarea style="width: 400px;"" placeholder="Deixe sua mensagem aqui: " ></textarea>
         <br>
         <input type="submit" value="enviar">

       </form>

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