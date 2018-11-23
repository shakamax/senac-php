<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>
         

 <div class="col-9 conteudo"> 
  <div class="row">
  <div class="col-3">
   
  </div>
  <div class="col-6">
    <img src="img/login.png" class="img-fluid rounded mx-auto d-block" alt="Imagem responsiva">
    <form method="post" action="logged.php">
      <div class="form-group">
        <label for="usuario">Login</label>
        <input type="text" class="form-control" id="usuario"  placeholder="Usuário" name="login" required="">
        <small id="emailHelp" class="form-text text-muted">Não compartilhe sua senha com ninguém.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha" required="">
        
         <?php if (isset($_GET['msg']) && $_GET['msg'] == 'error') { ?>   
        <div class="alert alert-danger">
          <p>Senha incorreta!</p>
        </div>
         <?php } ?>

      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lembre de mim.</label>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
  <div class="col-3"></div>

  </div>
 </div>
 </div>



<?php include ('layout/footer.php'); ?>