<?php 
  require_once ('functions.php'); 
  include_once '../verificaLogin.php';
  edit_pag();

  $id = $_GET['id'];
 
  $pdo = getConnection();
  $consulta = $pdo->query("SELECT * FROM pagamentos WHERE id ='$id'");
  $res = $consulta->fetch(PDO::FETCH_ASSOC);

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Pagamento</h2>

<form action="editPag.php?id=<?php echo $pagamento['idpag']; ?>" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo2">Nome</label>
      <input type="text" class="form-control" maxlength="11" disabled="" name="pagamento['cpfpag']" value="<?php echo $pagamento['nome']; ?>" disabled>
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" maxlength="11" disabled="" required="" name="pagamento['cpfpag']" value="<?php echo $pagamento['cpfpag']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Pagamento</label>
      <input type="text" class="form-control" name="pagamento['dtpag']" value="<?php echo $pagamento['dtpag']; ?>" disabled>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Vencimento</label>
      <input type="text" class="form-control" name="pagamento['dtvenc']" onkeypress="mascaraData( this, event )" pattern=".{10}" title="Digite a data de Nascimento" value="<?php echo $pagamento['dtvenc']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Status do Pagamento</label>
      <!--<input type="text" class="form-control" maxlength="3" placeholder="OK ou NOK" required="" name="pagamento['statuspag']" value="<?php echo $pagamento['statuspag']; ?>">-->
      <select class="form-control" name="pagamento['statuspag']">
        <option disabled="" selected="">Selecione</option>
        <option value="Pago"
        <?php
          if($res['statuspag']=='Pago')
            echo 'selected'; 
        ?>>Pago</option>
        <option value="Atrasado"
        <?php
          if($res['statuspag']=='Atrasado')
            echo 'selected'; 
        ?>>Atrasado</option>
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