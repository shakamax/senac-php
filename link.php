<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
         
     <div class="col-9 conteudo"> 

        <?php 
          $tipo = 'soma';
          $num1 = 10;
          $num2 = 8;
        ?>
          <h2>Link de função passando variável via GET</h2>

          <p>
            <a href="exercicioparametros.php?tipo=<?php echo $tipo ?>&num1=<?php echo $num1 ?>&num2=<?php echo $num2 ?>">
            	Clique para calcular a "<?php echo $tipo; ?>" de <?php echo $num1 ?> e <?php echo $num2 ?> .
            </a>

          </p>


    </div>
  </div>

<?php include ('layout/footer.php'); ?>