<?php 
	require_once('functions.php'); 
	include_once '../verificaLogin.php';
	view_user($_GET['id']);

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Usuário: <?php echo $usuario['nome']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $usuario['nome']; ?></dd>

	<dt>Usuário:</dt>
	<dd><?php echo $usuario['usuario']; ?></dd>

	<dt>Situação:</dt>
	<dd><?php echo $usuario['situacao']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $usuario['dtcria']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="editUser.php?id=<?php echo $usuario['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
	  <a href="index.php" class="btn btn-default"><i class="fa fa-arrow-left"></i> Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>