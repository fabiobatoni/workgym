<?php 
	require_once('functions.php'); 
	include_once '../verificaLogin.php';
	view_experimental($_GET['id']);

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Solicitante: <?php echo $experimental['nome']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $experimental['nome']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $experimental['cpfexp']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $experimental['celular']; ?></dd>

	<dt>E-mail:</dt>
	<dd><?php echo $experimental['email']; ?></dd>

	<dt>Data da Solicitação:</dt>
	<dd><?php echo $experimental['dtexp']; ?></dd>

	<dt>Treino já Realizado:</dt>
	<dd><?php echo $experimental['realizado']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="editExperimental.php?id=<?php echo $experimental['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
	  <a href="index.php" class="btn btn-default"><i class="fa fa-arrow-left"></i> Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>