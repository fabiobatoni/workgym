<?php   
//include_once 'database.php';
$dsn = 'mysql:host=localhost;dbname=workgym;charset=utf8';
        $user = 'root';
        $pass = '';


            $pdo = new PDO($dsn, $user, $pass);

//Aluno
$cpftreino = $_POST['cpftreino'];

$sql = "SELECT count(*) as total FROM alunos WHERE cpf = '{$cpftreino}'";

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