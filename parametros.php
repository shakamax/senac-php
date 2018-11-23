<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
         
 <div class="col-9 conteudo"> 

  <?php 
  //ESTE É A MANEIRA PROLONGADA USADA ALGUMAS VEZES
    if (isset($_GET['nome'])) {
      $parametro = $_GET['nome'];
    } else {
      $parametro ='';
    }

    //ESTE É O PARAMETRO NOVO DO PHP 7

    $parametro2 = $_GET['sobrenome'] ?? '';

    echo ucfirst($parametro).' '.strtoupper($parametro2);
    echo "<br>";
    echo "Para pegar a variável é necessário colocar esta url, usando name=, & para adicionar outra variável e ? logo após a url normal. <br>";
    echo "http://localhost/guilherme/senac-php/parametros.php?nome=João&sobrenome=guilherme";
    // Este, para aparecer o echo das variáveis, é necessário colocar após as a url ? e & para mais variáveis
    /*Ex
    http://localhost/guilherme/senac-php/parametros.php?nome=Jo%C3%A3o&sobrenome=guilherme */
   ?>


  </div>
</div>

<?php include ('layout/footer.php'); ?>