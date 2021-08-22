<?php
  require_once ('functions.php');
  include_once '../verificaLogin.php'; 
  add_user();

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Usuário</h2>

<form action="addUser.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo2">Nome</label>
      <input type="text" class="form-control" title="Nome do usuário" maxlength="50" required="" name="usuario['nome']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Usuário</label>
      <input type="text" class="form-control" id="usuario" title="Usuário para acessar o sistema" maxlength="30" required="" name="usuario['usuario']">
      <div class="msg2">verificando...</div><div class="msg"></div>
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Senha</label>
      <input type="password" class="form-control" title="Senha para acessar o sistema" maxlength="30" required="" name="usuario['senha']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo5">Situação do Usuário</label>
      <!--input type="text" class="form-control" maxlength="7" required="" name="usuario['situacao']">-->
      <select class="form-control" name="usuario['situacao']" required="">
        <option disabled="">Selecione</option>
        <option value="Ativo">Ativo</option>
        <option value="Inativo">Inativo</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="campo6">Data de Cadastro</label>
      <input type="text" class="form-control" maxlength="7" name="usuario['dtcria']" disabled="">
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