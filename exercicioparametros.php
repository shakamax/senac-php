<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
 <!-- AQUI COMEÇA O PHP -->
 <!-- AQUI COMEÇA O PHP -->
 <!-- AQUI COMEÇA O PHP -->
 <!-- AQUI COMEÇA O PHP -->
 <!-- AQUI COMEÇA O PHP -->
 <div class="col-9 conteudo"> 
    <?php 

      function calcAula($tipo, $num1, $num2) {
        switch ($tipo) {
          case 'soma':
            return "A $tipo tem resultado de ".($num1+$num2);
            break;
          case 'subtração':
            return "A $tipo tem resultado de ".($num1-$num2);
            break;
          case 'multiplicação':
            return "A $tipo tem resultado de ".($num1*$num2);
            break;
          case 'divisão':
            return "A $tipo tem resultado de ".($num1/$num2);
            break;	
          default: 
            # code...
            echo "escolha o tipo apenas como: <br>";
            echo "soma. <br>";
            echo "divisão. <br>";
            echo "multiplicação. <br>";
            echo "subtração, <br>";
            echo "Exemplo : <br>";
            echo "http://localhost/guilherme/senac-php/exercicioparametros.php?tipo=soma&num1=500&num2=10";
            break;
        }
      }

        $tipo = $_GET['tipo'] ?? '';
        $num1 = $_GET['num1'] ?? '';
        $num2 = $_GET['num2'] ?? '';

        echo calcAula($tipo, $num1, $num2);
     ?>

  </div>
</div>

<?php include ('layout/footer.php'); ?>