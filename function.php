<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
 <!-- AQUI COMEÇA O PHP  -->
 <!-- AQUI COMEÇA O PHP  -->
 <!-- AQUI COMEÇA O PHP  -->
 <!-- AQUI COMEÇA O PHP  -->
 <!-- AQUI COMEÇA O PHP  -->
 <!-- AQUI COMEÇA O PHP  -->
 <!-- AQUI COMEÇA O PHP  -->
 <div class="col-9 conteudo"> 

    <?php 
      function somaNum($num1, $num2) {
        $a = $num1 + $num2;

        return $a;
        }
       
      echo somaNum(20, 30);

       ?>
       <p><br></p>
       <p><br></p>
       <p><br></p>
       <?php 
       echo "Exercício de sala de aula"."<br>";
       function contaAula($tipo, $n1, $n2) {
        
        switch ($tipo) {
          case 'soma':
            return $res = $n1 + $n2; 
            break;
          case 'sub':
            return $res = $n1 - $n2;
            break;
          case 'mult':
            # code...
            return $res = $n1 * $n2;
            break;
          case 'div':
            # code...
            return $res = $n1 / $n2;
            break;

          default:
            echo "Escolha o tipo como: soma, sub, mult ou div apenas.";
            break;
        }
       }

       echo contaAula("soma", 2, 2);
       echo "<br>";
       echo contaAula("sub",5,3);
       echo "<br>";
       echo contaAula("mult",5,5);
       echo "<br>";
       echo contaAula("div",10,2);
       echo "<br>";
       echo contaAula("outra",10, 10);
       echo "<br>";
     ?>
     <br>
     <p>Este código é o mesmo resutlado porém com if e else.</p>
     <br>
     <?php 
     function calcAula($tipo, $num1, $num2) {
     if ($tipo == 'soma') {
       echo "A soma é igual a : " . ($num1 + $num2);
     } else if ($tipo == 'sub'){
       echo "A subtração é igual a : " . ($num1 - $num2);
     } else if ($tipo == 'mult') {
       echo "A multiplicação é igual a : " . ($num1 * $num2);
     } else if ($tipo == 'div') {
       echo "A divisão é igual a : " . ($num1 / $num2);
      }
      else {
        echo "Tipo passado não é valido, por favor passe apenas os tipos : soma, sub, mult e div";
      }
    }

       echo calcAula("soma", 2, 2);
       echo "<br>";
       echo calcAula("sub",5,3);
       echo "<br>";
       echo calcAula("mult",5,5);
       echo "<br>";
       echo calcAula("div",10,2);
       echo "<br>";
       echo calcAula("outra",10, 10);
      ?>

</div>
</div>
      
<?php include ('layout/footer.php'); ?>