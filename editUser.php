<?php 
  require_once ('functions.php'); 
  include_once '../verificaLogin.php';
  edit_user();

  $id = $_GET['id'];
 
  $pdo = getConnection();
  $consulta = $pdo->query("SELECT * FROM usuarios WHERE id ='$id'");
  $res = $consulta->fetch(PDO::FETCH_ASSOC);

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Usuário</h2>

<form action="editUser.php?id=<?php echo $usuario['id']; ?>" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo2">Nome</label>
      <input type="text" class="form-control" maxlength="50" title="Nome do usuário" required="" name="usuario['nome']" value="<?php echo $usuario['nome']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Usuário</label>
      <input type="text" class="form-control" maxlength="30" disabled="" required="" name="usuario['usuario']" value="<?php echo $usuario['usuario']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Nova Senha</label>
      <input type="password" class="form-control" title="Nova senha do usuário" maxlength="30" required="" name="usuario['senha']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo5">Situação do Usuário</label>
      <!--<input type="text" class="form-control" maxlength="7" required="" name="usuario['situacao']" value="<?php echo $usuario['situacao']; ?>">-->
      <select class="form-control" name="usuario['situacao']">
        <option disabled="">Selecione</option>
        <option value="Ativo"
        <?php
          if($res['situacao']=='Ativo')
            echo 'selected'; 
        ?>>Ativo</option>
        <option value="Inativo"
        <?php
          if($res['situacao']=='Inativo')
            echo 'selected'; 
        ?>>Inativo</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="campo6">Data de Cadastro</label>
      <input type="text" class="form-control" maxlength="7" name="usuario['dtcria']" value="<?php echo $usuario['dtcria']; ?>" disabled="">
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