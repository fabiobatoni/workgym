<?php
  require_once ('functions.php'); 
  include_once '../verificaLogin.php';
  add_experimental();

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Treino Experimental</h2>

<form action="addExperimental.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo2">Nome</label>
      <input type="text" class="form-control" maxlength="50" required="" name="experimental['nome']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">CPF</label>
      <input type="text" class="form-control" maxlength="30" required="" name="experimental['cpfexp']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Celular</label>
      <input type="text" class="form-control" maxlength="30" required="" name="experimental['celular']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo5">E-mail</label>
      <input type="email" class="form-control" maxlength="7" required="" name="experimental['email']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo6">Data de Solicitação</label>
      <input type="text" class="form-control" maxlength="7" name="experimental['dtexp']" disabled="">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
      <a href="index.php" class="btn btn-default"><i class="fa fa-window-close"></i> Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>