<?php 
  require_once('functions.php');
  include_once '../verificaLogin.php'; 
  edit();

  $id = $_GET['id'];
 
  $pdo = getConnection();
  $consulta = $pdo->query("SELECT * FROM alunos WHERE id ='$id'");
  $res = $consulta->fetch(PDO::FETCH_ASSOC);

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Aluno</h2>

<form action="edit.php?id=<?php echo $aluno['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Nome</label>
      <input type="text" class="form-control" title="Nome do Aluno" maxlength="50" required="" name="aluno['nome']" value="<?php echo $aluno['nome']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" disabled="" maxlength="14" required="" name="aluno['cpf']" value="<?php echo $aluno['cpf']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" onkeypress="mascaraData( this, event )" pattern=".{10}" title="Digite a data de Nascimento" maxlength="10" required="" name="aluno['nasc']" value="<?php echo $aluno['nasc']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Sexo</label>
      <!--<input type="text" class="form-control" maxlength="1" required="" name="aluno['sexo']" value="<?php echo $aluno['sexo']; ?>">-->
      <select class="form-control" name="aluno['sexo']">
        <option disabled="">Selecione</option>
        <option value="Masculino"
        <?php
          if($res['sexo']=='Masculino')
            echo 'selected'; 
        ?>>Masculino</option>
        <option value="Feminino"
        <?php
          if($res['sexo']=='Feminino')
            echo 'selected'; 
        ?>>Feminino</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" pattern=".{9}" title="O CEP precisa ter 9 números." id="RegraCEP" onkeydown="javascript: fMascCEP( this, mCEP );" maxlength="9" name="aluno['cep']" value="<?php echo $aluno['cep']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" title="Cidade" maxlength="28" required="" name="aluno['cidade']" value="<?php echo $aluno['cidade']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" title="Endereço e Rua" maxlength="65" required="" name="aluno['end']" value="<?php echo $aluno['end']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" title="Bairro" maxlength="50" required="" name="aluno['bairro']" value="<?php echo $aluno['bairro']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Plano</label>
      <select class="form-control" name="aluno['plano']">
        <option disabled="">Selecione</option>
        <option value="Individual - R$70,00"
        <?php
          if($res['plano']=='Individual - R$70,00')
            echo 'selected'; 
        ?>>Individual - R$70,00</option>
        <option value="Familiar - R$60,00"
        <?php
          if($res['plano']=='Familiar - R$60,00')
            echo 'selected'; 
        ?>>Familiar - R$60,00</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" title="Telefone" id="RegraTelefone" minlength="13" onkeydown="javascript: fMascTEL( this, mTEL );" maxlength="13" name="aluno['telefone']" value="<?php echo $aluno['telefone']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" title="Celular" id="RegraCelular" minlength="14" onkeydown="javascript: fMascCEL( this, mCEL );" maxlength="14" name="aluno['celular']" value="<?php echo $aluno['celular']; ?>">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">Estado</label>
      <!--<input type="text" class="form-control" maxlength="2" required="" name="aluno['estado']" value="<?php echo $aluno['estado']; ?>">-->
      <select class="form-control" name="aluno['estado']">
        <option disabled="">Selecione</option>
        <option value="AC"
        <?php
          if($res['estado']=='AC')
            echo 'selected'; 
        ?>>AC</option>
        <option value="AL"
        <?php
          if($res['estado']=='AL')
            echo 'selected'; 
        ?>>AL</option>
        <option value="AP"
        <?php
          if($res['estado']=='AP')
            echo 'selected'; 
        ?>>AP</option>
        <option value="AM"
        <?php
          if($res['estado']=='AM')
            echo 'selected'; 
        ?>>AM</option>
        <option value="BA"
        <?php
          if($res['estado']=='BA')
            echo 'selected'; 
        ?>>BA</option>
        <option value="CE"
        <?php
          if($res['estado']=='CE')
            echo 'selected'; 
        ?>>CE</option>
        <option value="DF"
        <?php
          if($res['estado']=='DF')
            echo 'selected'; 
        ?>>DF</option>
        <option value="ES"
        <?php
          if($res['estado']=='ES')
            echo 'selected'; 
        ?>>ES</option>
        <option value="GO"
        <?php
          if($res['estado']=='GO')
            echo 'selected'; 
        ?>>GO</option>
        <option value="MA"
        <?php
          if($res['estado']=='MA')
            echo 'selected'; 
        ?>>MA</option>
        <option value="MT"
        <?php
          if($res['estado']=='MT')
            echo 'selected'; 
        ?>>MT</option>
        <option value="MS"
        <?php
          if($res['estado']=='MS')
            echo 'selected'; 
        ?>>MS</option>
        <option value="MG"
        <?php
          if($res['estado']=='MG')
            echo 'selected'; 
        ?>>MG</option>
        <option value="PA"
        <?php
          if($res['estado']=='PA')
            echo 'selected'; 
        ?>>PA</option>
        <option value="PB"
        <?php
          if($res['estado']=='PB')
            echo 'selected'; 
        ?>>PB</option>
        <option value="PR"
        <?php
          if($res['estado']=='PR')
            echo 'selected'; 
        ?>>PR</option>
        <option value="PE"
        <?php
          if($res['estado']=='PE')
            echo 'selected'; 
        ?>>PE</option>
        <option value="PI"
        <?php
          if($res['estado']=='PI')
            echo 'selected'; 
        ?>>PI</option>
        <option value="RJ"
        <?php
          if($res['estado']=='RJ')
            echo 'selected'; 
        ?>>RJ</option>
        <option value="RN"
        <?php
          if($res['estado']=='RN')
            echo 'selected'; 
        ?>>RN</option>
        <option value="RS"
        <?php
          if($res['estado']=='RS')
            echo 'selected'; 
        ?>>RS</option>
        <option value="RO"
        <?php
          if($res['estado']=='RO')
            echo 'selected'; 
        ?>>RO</option>
        <option value="RR"
        <?php
          if($res['estado']=='RR')
            echo 'selected'; 
        ?>>RR</option>
        <option value="SC"
        <?php
          if($res['estado']=='SC')
            echo 'selected'; 
        ?>>SC</option>
        <option value="SP"
        <?php
          if($res['estado']=='SP')
            echo 'selected'; 
        ?>>SP</option>
        <option value="SC"
        <?php
          if($res['estado']=='SC')
            echo 'selected'; 
        ?>>SC</option>
        <option value="TO"
        <?php
          if($res['estado']=='TO')
            echo 'selected'; 
        ?>>TO</option>
      </select>
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Email</label>
      <input type="email" class="form-control" title="Email" maxlength="40" name="aluno['email']" value="<?php echo $aluno['email']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Situção</label>
      <select class="form-control" name="aluno['situacao']">
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
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="aluno['dtcadastro']" disabled value="<?php echo $aluno['dtcadastro']; ?>">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-12">
      <label for="campo5">Observação</label>
      <textarea class="form-control" title="Observações sobre o Aluno" name="aluno['obs']" maxlength="200" style="resize: vertical"><?php echo $aluno['obs']; ?></textarea>
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