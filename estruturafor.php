<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
	         
         <div class="col-9 conteudo"> 
    	<!-- AQUI COMECA O PHP AQUI, AQUI SEU CEGO. -->
    	<!-- AQUI COMECA O PHP AQUI, AQUI SEU CEGO. -->
    	<!-- AQUI COMECA O PHP AQUI, AQUI SEU CEGO. -->
    	<!-- AQUI COMECA O PHP AQUI, AQUI SEU CEGO. -->
          <?php 
  
            for ($i=0; $i <= 10 ; $i++) { 
              # code...
              echo $i."<br>";
            }
            echo "Boa noite";

           ?>

           <h1>____________________________________________</h1>

          <?php 
            $x = 0;
            while ( $x <= 10) {
              echo $x."<br>";
              $x++;
            }
            echo "Boa noite.";
          ?>


        </div>
      </div>

<?php include ('layout/footer.php'); ?>