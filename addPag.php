<?php 
  require_once ('functions.php');
  include_once '../verificaLogin.php'; 
  add_pag();

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Pagamento</h2>

<form action="addPag.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" pattern=".{14}" title="O CEP precisa ter 11 números." id="cpfpag" onkeydown="javascript: fMascCPF( this, mCPF );" maxlength="14" required="" name="pagamento['cpfpag']">
      <div class="msg2">verificando...</div><div class="msg"></div>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Pagamento</label>
      <input type="text" class="form-control" name="pagamento['dtpag']" disabled="">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Vencimento</label>
      <input type="text" class="form-control" name="pagamento['dtvenc']" onkeypress="mascaraData( this, event )" pattern=".{10}" title="Digite a data de Vencimento" maxlength="10" required="">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Status do Pagamento</label>
      <!--<input type="text" class="form-control" maxlength="3" placeholder="OK ou NOK" required="" name="pagamento['statuspag']">-->
      <select class="form-control" name="pagamento['statuspag']" required="">
        <option disabled="" selected="">Selecione</option>
        <option value="Pago">Pago</option>
        <option value="Atrasado">Atrasado</option>
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