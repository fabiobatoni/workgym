<?php
	require_once 'config.php'; 
	include_once 'verificaLogin.php';
	require_once DBAPI; 

	include(HEADER_TEMPLATE); 
	$db = getConnection();

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="usuarios" class="btn btn-danger">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-address-card fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Usuários</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="alunos/add.php" class="btn btn-success">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Aluno</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="alunos" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Alunos</p>
				</div>
			</div>
		</a>
	</div>

	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="pagamentos" class="btn btn-warning">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-dollar-sign fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Pagamentos</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="treinos" class="btn btn-info">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-dumbbell fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Treinos</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="experimental" class="btn btn-info">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-hourglass-half fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Treino Experimental</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>