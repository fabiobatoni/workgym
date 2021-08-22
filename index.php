<?php
    require_once('functions.php');
    include_once '../verificaLogin.php';
    index_user();

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Usuários</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="addUser.php"><i class="fa fa-plus"></i> Novo Usuário</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-redo"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
		<?php unset($_SESSION['message']); ?>
	</div>
<?php endif; ?>

<hr>

<table id="usuarios" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Usuário</th>
            <th>Situação</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
		<?php if ($usuarios) : ?>
		<?php foreach ($usuarios as $usuario) : ?>
			<tr>
				<td><?php echo $usuario['nome']; ?></td>
				<td><?php echo $usuario['usuario']; ?></td>
				<td><?php echo $usuario['situacao']; ?></td>
				<td class="actions text-right">
				<a href="viewUser.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
				<a href="editUser.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Editar</a>
				<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteuser-modal" data-customer="<?php echo $usuario['id']; ?>"><i class="fa fa-trash"></i> Excluir</a></td>
			</tr>
			<?php endforeach; ?>
			<?php else : ?>
			<tr>
				<td colspan="6">Nenhum registro encontrado.</td>
			</tr>
		<?php endif; ?>
	</tbody>   
</table>

<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>