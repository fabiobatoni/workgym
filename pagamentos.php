<?php   
//include_once 'database.php';
$dsn = 'mysql:host=localhost;dbname=workgym;charset=utf8';
        $user = 'root';
        $pass = '';


            $pdo = new PDO($dsn, $user, $pass);

//Pagamento
$cpfpag = $_POST['cpfpag'];

$sql = "SELECT count(*) as total FROM alunos WHERE cpf = '{$cpfpag}'";

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