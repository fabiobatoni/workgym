<?php	
//include_once 'database.php';
$dsn = 'mysql:host=localhost;dbname=workgym;charset=utf8';
		$user = 'root';
		$pass = '';


			$pdo = new PDO($dsn, $user, $pass);


$usuario = $_POST['usuario'];

$sql = "SELECT count(*) as total FROM usuarios WHERE usuario = '{$usuario}'";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_COLUMN);


    if ($result == 1) 
    {
    	$count = 1;
    }
    else
    {
		$count = 0;
	}

echo $result;
?>