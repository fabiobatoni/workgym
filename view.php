<?php 
	require_once('functions.php'); 
	include_once '../verificaLogin.php'; 
	view($_GET['id']);

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Aluno: <?php echo $aluno['nome']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $aluno['nome']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $aluno['cpf']; ?></dd>

	<dt>Data de Nascimento:</dt>
	<dd><?php echo $aluno['nasc']; ?></dd>

	<dt>Sexo:</dt>
	<dd><?php echo $aluno['sexo']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $aluno['dtcadastro']; ?></dd>

	<dt>Plano Contratado:</dt>
	<dd><?php echo $aluno['plano']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $aluno['end']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $aluno['bairro']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $aluno['cep']; ?></dd>

	<dt>Cidade:</dt>
	<dd><?php echo $aluno['cidade']; ?></dd>

	<dt>Estado:</dt>
	<dd><?php echo $aluno['estado']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Telefone:</dt>
	<dd><?php echo $aluno['telefone']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $aluno['celular']; ?></dd>

	<dt>Email:</dt>
	<dd><?php echo $aluno['email']; ?></dd>

	<dt>Situação:</dt>
	<dd><?php echo $aluno['situacao']; ?></dd>

	<dt>Data Alteração:</dt>
	<dd><?php echo $aluno['dtalteracao']; ?></dd>

	<dt>Observação:</dt>
	<dd><?php echo $aluno['obs']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $aluno['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
	  <a href="index.php" class="btn btn-default"><i class="fa fa-arrow-left"></i> Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>