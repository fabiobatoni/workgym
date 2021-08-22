<?php 
  require_once ('functions.php'); 
  include_once '../verificaLogin.php';
  edit_experimental();

  $id = $_GET['id'];
 
  $pdo = getConnection();
  $consulta = $pdo->query("SELECT * FROM experimentais WHERE id ='$id'");
  $res = $consulta->fetch(PDO::FETCH_ASSOC);

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Treino Experimental</h2>

<form action="editExperimental.php?id=<?php echo $experimental['id']; ?>" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" maxlength="11" required="" disabled="" name="experimental['cpfexp']" value="<?php echo $experimental['cpfexp']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Solicitação</label>
      <input type="text" class="form-control" name="experimental['dtexp']" disabled="" value="<?php echo $experimental['dtexp']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Treino já Realizado?</label>
      <!--<input type="text" class="form-control" name="experimental['realizado']" required="" maxlength="1" value="<?php echo $experimental['realizado']; ?>">-->
      <select class="form-control" name="experimental['realizado']">
        <option disabled="" selected="">Selecione</option>
        <option value="Sim"
        <?php
          if($res['realizado']=='Sim')
            echo 'selected'; 
        ?>>Sim</option>
        <option value="Não"
        <?php
          if($res['realizado']=='Não')
            echo 'selected'; 
        ?>>Não</option>
      </select>
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