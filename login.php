<?php
	
	session_start();

	include_once './inc/database.php';

	$conn = getConnection();

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE BINARY usuario = :usuario AND BINARY senha = :senha AND situacao = 'Ativo'";

	$stmt = $conn->prepare($sql);
	$stmt->bindValue(':usuario', $usuario);
	$stmt->bindValue(':senha', $senha);
	$stmt->execute();

	$row = $stmt->rowCount();

	if($row == 1)
	{
		$_SESSION['usuario'] = $usuario;
		header('location: dashboard.php');
		exit();
	}
	else
	{
		$_SESSION['nao_autenticado'] = true;
		header('location: index.php');
		exit();
	}

?>