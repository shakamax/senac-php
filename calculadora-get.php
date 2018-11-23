<?php include ('layout/header.php'); ?>

<?php include ('layout/sidebar.php'); ?>

         
 <div class="col-9 conteudo"> 

    <div class="row">
    <form class="form-inline" method="get" action="exercicioparametros.php">
      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo</label>
      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="tipo">
        <option selected>Escolher uma operação</option>
        <option value="soma">soma</option>
        <option value="subtração">subtração</option>
        <option value="multiplicação">multiplicação</option>
        <option value="divisão">divisão</option>
      </select>
    </div>
    <div class="row">
      <div class="form-group">
        <label for="formGroupExampleInput">Numero 1</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="num1" placeholder="Digite o 1º numero">
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <label for="formGroupExampleInput2">Numero 2</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="num2" placeholder="Digite o 2º numero">
      </div>
      </div>
      <input type="submit" value="Calcular" class="btn btn-info">
    </form>
    </div>
      

  </div>
</div>

 <?php include ('layout/footer.php'); ?>