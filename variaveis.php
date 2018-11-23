<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
         

 <div class="col-9 conteudo"> 

      <h1>
      <?php 
      //comentários
      /*Este
      pode ter
      varias linhas */
      #Olha o asp

      $nome = 'Jão das neve'; //Estamos declarando uma variável para dar echo na tela 
      $nascimento = '06/09/1991';
      $cidade = 'Dos Muro';

      echo "Nome : ";
      echo $nome;
      echo "<br />";
      echo "Nascimento : ";
      echo $nascimento;
      echo "<br />";
      echo "Cidade : ";
      echo $cidade;
    

      ?>

    </h1>

    <!-- Este é outra maneira de declarar -->
    <p><?php echo "nome : ";
      echo $nome; 
     ?></p>
    <p><?php 
      echo "Nascimento : ";
      echo $nascimento;
    ?></p>
    <p><?php 
      echo "Cidade : ";
      echo $cidade;
    ?></p>


</div>
</div>

<?php include ('layout/footer.php'); ?>