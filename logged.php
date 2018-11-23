
<?php 
 $senha = $_POST['senha'];
 $usuario = $_POST['login'];

 if ($senha != 1234) {
   header('location:login.php?msg=error');
 }
 ?>

<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
         
         <div class="col-9 conteudo"> 

          <div class="row">
            <div class="col-3"></div>
                <div class="col-6" align="center">
                  
                          
                     <h1>Bem vindo <?php echo strtoupper($usuario)
                     ?> </h1>
                  
                </div>
             <div class="col-3"></div>
          </div>

        </div>
      </div>

<?php include ('layout/footer.php'); ?>