<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
         
   <div class="col-9 conteudo"> 
   <!-- AQUI COMECA O PHP -->
   <!-- AQUI COMECA O PHP -->
   <!-- AQUI COMECA O PHP -->
   <!-- AQUI COMECA O PHP -->

   <?php 
    $idade = 60;

    if ($idade < 18) {
      echo "A $idade é de menor.";
    } else if ($idade < 60) {
      echo "A $idade é maior de idade.";
    } else {
      echo "A $idade é terceira idade ";
    }

   ?>



  
  </div>

<?php include ('layout/footer.php'); ?>