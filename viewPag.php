<?php 
	require_once('functions.php');
	include_once '../verificaLogin.php'; 
	view_pag($_GET['id']);

    $id = $_GET['id'];

    $pdo = getConnection();
	$consulta = $pdo->query("SELECT * FROM pagamentos WHERE id = '$id'");
	$res = $consulta->fetch(PDO::FETCH_ASSOC);

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Aluno: <?php echo $pagamento['nome']; ?>&nbsp&nbsp&nbsp&nbsp<a class="btn btn-primary" href="http://localhost/workgym/pagamentos/pdf/index.php?id=<?php echo $res['id']; ?>" target="_blank"><i class="fa fa-print"></i> Imprimir</a></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $pagamento['nome']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $pagamento['cpfpag']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $pagamento['celular']; ?></dd>

	<dt>Status do Pagamento:</dt>
	<dd><?php echo $pagamento['statuspag']; ?></dd>

	<dt>Data de Pagamento:</dt>
	<dd><?php echo $pagamento['dtpag']; ?></dd>

	<dt>Data de Vencimento:</dt>
	<dd><?php echo $pagamento['dtvenc']; ?></dd>

	<dt>Plano Contratado:</dt>
	<dd><?php echo $pagamento['plano']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="editPag.php?id=<?php echo $pagamento['idpag']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
	  <a href="index.php" class="btn btn-default"><i class="fa fa-arrow-left"></i> Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>