<?php

require_once('../config.php');
require_once(DBAPI);

$pagamentos = null;
$pagamento = null;

/**
 *  Listagem de Usuários
 */
function index_user() {
	global $usuarios;
	$usuarios = find_all_user('usuarios');
}

?>

<?php
/**
 *  Cadastro de Usuários
 */
function add_user() {

  if (!empty($_POST['usuario'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $usuario = $_POST['usuario'];
    $usuario['dtcria'] = $today->format("Y-m-d H:i:s");
    
    save_user('usuarios', $usuario);
    header('location: index.php');
  }
}

?>

<?php

/**
 *  Visualização de um Usuários
 */
function view_user($id = null) {
  global $usuario;
  $usuario = find_user('usuarios', $id);
}

?>

<?php
/**
 *  Exclusão de um Usuários
 */
function delete_user($id = null) {

  global $usuario;
  $usuario = remove_user('usuarios', $id);

  header('location: index.php');
}

?>