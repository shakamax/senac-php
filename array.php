<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>


 <div class="col-9 conteudo"> 
    <?php 
      $cor = [];

      $cor[] = "laranjado";
      $cor[] = "Verde";
      $cor[] = "Vermelho";
      $cor['nova_cor'] = "Aquamarine";
      //Não é necessário colocar a numeração da key
    ?>
    <br>
    <h1><?php echo $cor[2]; ?></h1>
    <!-- Apenas quando se sabe a posição -->
    <br>
    <h1><?php var_dump($cor) ?></h1>
    <!-- Detalhamento do array com numero de string e tudo  -->
    <br>
    <h1><?php print_r($cor) ?></h1>
    <!-- Posição e dados do array -->


</div>
  </div>

  <div class="row">
    <div class="col-12 rodape">
      <p>Todos os direitos ao Professor Mozart pelos exemplos e pro burro que os colocou em prática. Flw vlw.</p>
    </div>
  </div>

 <?php include ('layout/footer.php'); ?>