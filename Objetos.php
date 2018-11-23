<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
         
   <div class="col-9 conteudo"> 
   	<!-- AQUI COMEÇA O DIABO DO PHP -->
   	<!-- AQUI COMEÇA O DIABO DO PHP -->
   	<!-- AQUI COMEÇA O DIABO DO PHP -->
   	<!-- AQUI COMEÇA O DIABO DO PHP -->
   	<!-- AQUI COMEÇA O DIABO DO PHP -->
    <?php 
      /**
       * 
       */
      class Carro
      {
        private $nome;
        public function acelerar(){
          # code...
          echo "Vrum Vrum Vrum";
        }
        public function setNome($var){
          $this->nome = $var;
        }
        public function getNome(){
          return $this->nome;
        }
      }

      $uno = new Carro();
      $uno->setNome('Fiat Uno');

      $uno->acelerar();
      echo "<br>";
      echo $uno->getNome();
   ?>



  </div>
</div>

      
<?php include ('layout/footer.php'); ?>