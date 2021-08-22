<?php

	function getConnection()
	{
		$dsn = 'mysql:host=localhost;dbname=workgym;charset=utf8';
		$user = 'root';
		$pass = '';

		try
		{
			$pdo = new PDO($dsn, $user, $pass);

			return $pdo;
		}
		catch (PDOException $ex)
		{
			echo 'Erro: '.$ex->getMessage();
		}
	}

	$pdo = null;
?>

<?php

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find( $table = null, $id = null ) {
  
	$database = getConnection();
	$found = null;

	try {
	  if ($id) {
	    $sql = "SELECT * FROM " . $table . " WHERE id = " . $id . " ORDER BY nome";
	    $result = $database->query($sql);
	    
	    if ($result->rowCount() > 0) {
	      $found = $result->fetch();
	    }
	    
	  } else {
	    
	    $sql = "SELECT * FROM " . $table . " ORDER BY nome";
	    $result = $database->query($sql);

	    if ($result->rowCount() > 0) {
	    	$found = $result->fetchAll();
        
        /* Metodo alternativo
        $found = array();

        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
	    }
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
	
	$database = null;
	return $found;
}

?>

<?php

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
  return find($table);
}

?>

<?php

/**
*  Insere um registro no BD
*/
function save($table = null, $data = null) {

  $database = getConnection();

  $columns = null;
  $values = null;

  //print_r($data);

  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }

  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['aluno'])) {

      $aluno = $_POST['aluno'];
      $aluno['dtalteracao'] = $now->format("Y-m-d H:i:s");

      update('alunos', $id, $aluno);
      header('location: index.php');
    } else {

      global $aluno;
      $aluno = find('alunos', $id);
    } 
  } else {
    header('location: index.php');
  }
}

?>

<?php
/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update($table = null, $id = 0, $data = null) {

  $database = getConnection();

  $items = null;

  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }

  // remove a ultima virgula
  $items = rtrim($items, ',');

  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) { 

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php
/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove( $table = null, $id = null ) {

  $database = getConnection();
	
  try {
    if ($id) {

      $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);

      if ($result = $database->query($sql)) {   	
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 

    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  $database = null;
}

?>

<?php

/**
*  Insere um registro no BD
*/
function save_pag($table = null, $data = null) {

  $database = getConnection();

  $columns = null;
  $values = null;

  //print_r($data);

  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }

  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all_pag( $tablep,$tablea ) {
  return find_pag($tablep, $tablea);
}

?>

<?php

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find_pag( $tablea = null, $tablep = null, $id = null ) {
  
  $database = getConnection();
  $found = null;

  try {
    if ($id) {
      $sql = "SELECT T1.nome, T1.celular, T2.id as idpag, T1.plano, T2.cpfpag, T2.statuspag, T2.dtpag, T2.dtvenc FROM " . $tablea . " T1 INNER JOIN " . $tablep . " T2 ON T2.cpfpag = T1.cpf WHERE T2.id =  " .$id. " ORDER BY T1.nome";
      $result = $database->query($sql);
      
      if ($result->rowCount() > 0) {
        $found = $result->fetch();
      }
      
    } else {
      
      $sql = "SELECT T1.nome, T1.celular, T2.id as idpag, T1.plano, T2.cpfpag, T2.statuspag, T2.dtpag, T2.dtvenc FROM " . $tablea . " T1 INNER JOIN " . $tablep . " T2 ON T2.cpfpag = T1.cpf ORDER BY T1.nome";
      $result = $database->query($sql);

      if ($result->rowCount() > 0) {
        $found = $result->fetchAll();
        
        /* Metodo alternativo
        $found = array();

        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
      }
    }
  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  $database = null;
  return $found;
}

?>

<?php

/**
 *  Atualizacao/Edicao de Pagamento
 */
function edit_pag() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['pagamento'])) {

      $pagamento = $_POST['pagamento'];
      $pagamento['dtpag'] = $now->format("Y-m-d H:i:s");

      update_pag('pagamentos', $id, $pagamento);
      header('location: index.php');
    } else {

      global $pagamento;
      $pagamento = find_pag('alunos', 'pagamentos', $id);
    } 
  } else {
    header('location: index.php');
  }
}

?>

<?php
/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update_pag($table = null, $id = 0, $data = null) {

  $database = getConnection();

  $items = null;

  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }

  // remove a ultima virgula
  $items = rtrim($items, ',');

  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) { 

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php
/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove_pag( $tablea = null, $tablep = null, $id = null ) {

  $database = getConnection();
  
  try {
    if ($id) {

      $sql = "DELETE FROM " . $tablep . " WHERE id = " . $id;
      $result = $database->query($sql);

      if ($result = $database->query($sql)) {     
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 

    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  $database = null;
}

?>

<?php

/**
*  Insere um registro no BD
*/
function save_user($table = null, $data = null) {

  $database = getConnection();

  $columns = null;
  $values = null;

  //print_r($data);

  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }

  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all_user( $table ) {
  return find_user($table);
}

?>

<?php

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find_user( $table = null, $id = null ) {
  
  $database = getConnection();
  $found = null;

  try {
    if ($id) {
      $sql = "SELECT * FROM " . $table . " WHERE id = " . $id . " ORDER BY nome";
      $result = $database->query($sql);
      
      if ($result->rowCount() > 0) {
        $found = $result->fetch();
      }
      
    } else {
      
      $sql = "SELECT * FROM " . $table . " ORDER BY nome";
      $result = $database->query($sql);

      if ($result->rowCount() > 0) {
        $found = $result->fetchAll();
        
        /* Metodo alternativo
        $found = array();

        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
      }
    }
  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  $database = null;
  return $found;
}

?>

<?php

/**
 *  Atualizacao/Edicao de Pagamento
 */
function edit_user() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['usuario'])) {

      $usuario = $_POST['usuario'];
      $usuario['dtcria'] = $now->format("Y-m-d H:i:s");

      update_user('usuarios', $id, $usuario);
      header('location: index.php');
    } else {

      global $usuario;
      $usuario = find_user('usuarios', $id);
    } 
  } else {
    header('location: index.php');
  }
}

?>

<?php
/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update_user($table = null, $id = 0, $data = null) {

  $database = getConnection();

  $items = null;

  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }

  // remove a ultima virgula
  $items = rtrim($items, ',');

  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) { 

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php
/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove_user( $table = null, $id = null ) {

  $database = getConnection();
  
  try {
    if ($id) {

      $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);

      if ($result = $database->query($sql)) {     
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 

    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  $database = null;
}

?>

<?php
/**
*  Insere um registro no BD
*/
function save_treino($table = null, $data = null) {

  $database = getConnection();

  $columns = null;
  $values = null;

  //print_r($data);

  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }

  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all_treino( $tabletr,$tablea ) {
  return find_treino($tabletr, $tablea);
}

?>

<?php

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find_treino( $tablea = null, $tabletr = null, $id = null ) {
  
  $database = getConnection();
  $found = null;

  try {
    if ($id) {
      $sql = "SELECT T1.nome, T1.celular, T2.id as idtreino, T2.cpftreino, T2.dttreino FROM " . $tablea . " T1 INNER JOIN " . $tabletr . " T2 ON T2.cpftreino = T1.cpf WHERE T2.id =  " .$id. " ORDER BY T1.nome";
      $result = $database->query($sql);
      
      if ($result->rowCount() > 0) {
        $found = $result->fetch();
      }
      
    } else {
      
      $sql = "SELECT T1.nome, T1.celular, T2.id as idtreino, T2.cpftreino, T2.dttreino FROM " . $tablea . " T1 INNER JOIN " . $tabletr . " T2 ON T2.cpftreino = T1.cpf ORDER BY T1.nome";
      $result = $database->query($sql);

      if ($result->rowCount() > 0) {
        $found = $result->fetchAll();
        
        /* Metodo alternativo
        $found = array();

        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
      }
    }
  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  $database = null;
  return $found;
}

?>

<?php
/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove_treino( $tablea = null, $tabletr = null, $id = null ) {

  $database = getConnection();
  
  try {
    if ($id) {

      $sql = "DELETE FROM " . $tabletr . " WHERE id = " . $id;
      $result = $database->query($sql);

      if ($result = $database->query($sql)) {     
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 

    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  $database = null;
}

?>

<?php

/**
 *  Atualizacao/Edicao de Treino
 */
function edit_treino() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['treino'])) {

      $treino = $_POST['treino'];
      //$treino['dttreino'] = $now->format("Y-m-d H:i:s");

      update_treino('treinos', $id, $treino);
      header('location: index.php');
    } else {

      global $treino;
      $treino = find_treino('alunos', 'treinos', $id);
    } 
  } else {
    header('location: index.php');
  }
}

?>

<?php
/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update_treino($table = null, $id = 0, $data = null) {

  $database = getConnection();

  $items = null;

  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }

  // remove a ultima virgula
  $items = rtrim($items, ',');

  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) { 

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find_experimental( $table = null, $id = null ) {
  
  $database = getConnection();
  $found = null;

  try {
    if ($id) {
      $sql = "SELECT * FROM " . $table . " WHERE id = " . $id. " ORDER BY nome";
      $result = $database->query($sql);
      
      if ($result->rowCount() > 0) {
        $found = $result->fetch();
      }
      
    } else {
      
      $sql = "SELECT * FROM " . $table. " ORDER BY nome";
      $result = $database->query($sql);

      if ($result->rowCount() > 0) {
        $found = $result->fetchAll();
        
        /* Metodo alternativo
        $found = array();

        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
      }
    }
  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  $database = null;
  return $found;
}

?>

<?php

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all_experimental( $table ) {
  return find($table);
}

?>

<?php

/**
*  Insere um registro no BD
*/
function save_experimental($table = null, $data = null) {

  $database = getConnection();

  $columns = null;
  $values = null;

  //print_r($data);

  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }

  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php

/**
 *  Atualizacao/Edicao de Treino Experimental
 */
function edit_experimental() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['experimental'])) {

      $experimental = $_POST['experimental'];
      //$experimental['dtexp'] = $now->format("Y-m-d H:i:s");

      update_experimental('experimentais', $id, $experimental);
      header('location: index.php');
    } else {

      global $experimental;
      $experimental = find_experimental('experimentais', $id);
    } 
  } else {
    header('location: index.php');
  }
}

?>

<?php
/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update_experimental($table = null, $id = 0, $data = null) {

  $database = getConnection();

  $items = null;

  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }

  // remove a ultima virgula
  $items = rtrim($items, ',');

  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) { 

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  $database = null;
}

?>

<?php
/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove_experimental( $table = null, $id = null ) {

  $database = getConnection();
  
  try {
    if ($id) {

      $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);

      if ($result = $database->query($sql)) {     
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 

    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  $database = null;
}

?>

<?php