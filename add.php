<?php 
  require_once('functions.php'); 
  include_once '../verificaLogin.php';
  add();

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Aluno</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Nome</label>
      <input type="text" class="form-control" title="Digite o nome do Aluno" maxlength="50" required="" name="aluno['nome']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" id="cpfaluno" pattern=".{14}" title="O CPF precisa ter 11 números." onkeydown="javascript: fMascCPF( this, mCPF );" class="form-control" maxlength="14" required="" name="aluno['cpf']">
      <div class="msg2">verificando...</div><div class="msg"></div>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" onkeypress="mascaraData( this, event )" pattern=".{10}" title="Digite a data de Nascimento" maxlength="10" required="" name="aluno['nasc']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Sexo</label>
      <!--<input type="text" class="form-control" maxlength="1" placeholder="M ou F" required="" name="aluno['sexo']">-->
      <select class="form-control" name="aluno['sexo']" required="">
        <option disabled="">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" id="RegraCEP" pattern=".{9}" title="O CEP precisa ter 9 números." name="RegraValida" onkeydown="javascript: fMascCEP( this, mCEP );" maxlength="9" name="aluno['cep']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" title="Digite a Cidade" maxlength="28" required="" name="aluno['cidade']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" title="Digite o a Rua e o Número" placeholder="RUA, Nº" maxlength="65" required="" name="aluno['end']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" title="Digite o Bairro" maxlength="50" required="" name="aluno['bairro']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Plano</label>
      <select class="form-control" name="aluno['plano']" required="">
        <option disabled="">Selecione</option>
        <option value="Masculino">Individual - R$70,00</option>
        <option value="Feminino">Familiar - R$60,00</option>
      </select>
    </div>
  </div> 
  
  <div class="row"><div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" title="Digite o Telefone" id="RegraTelefone" minlength="13" onkeydown="javascript: fMascTEL( this, mTEL );" maxlength="13" name="aluno['telefone']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" title="Digite o Celular" id="RegraCelular" minlength="14" onkeydown="javascript: fMascCEL( this, mCEL );" maxlength="14" name="aluno['celular']">
    </div>
    
    <div class="form-group col-md-1">
      <label for="campo3">Estado</label>
      <!--<input type="text" class="form-control" maxlength="2" required="" name="aluno['estado']">-->
      <select class="form-control" name="aluno['estado']" required="">
        <option disabled="">Selecione</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="DF">DF</option>
        <option value="ES">ES</option>
        <option value="GO">GO</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
      </select>
    </div>
    
    <div class="form-group col-md-3">
      <label for="campo3">Email</label>
      <input type="email" class="form-control" title="Digite o Email" maxlength="40" name="aluno['email']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo4">Situação</label>
      <!--<input type="text" class="form-control" placeholder="A ou I" maxlength="1" required="" name="aluno['situacao']">-->
      <select class="form-control" name="aluno['situacao']" required="">
        <option disabled="">Selecione</option>
        <option value="Ativo">Ativo</option>
        <option value="Inativo">Inativo</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="aluno['dtcadastro']" disabled>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-12">
      <label for="campo5">Observação</label>
      <textarea class="form-control" title="Obervações sobre o Aluno" name="aluno['obs']" maxlength="200" style="resize: vertical"></textarea>
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