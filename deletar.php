<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
    <link rel="stylesheet" href="../css/style.css">
<?php 
$host = 'localhost';
$db = 'cadastro_consulta';
$user = 'julia';
$pass = '123456';
$port = 3307;
require_once 'db.php';
$database = new Database($host, $db, $user, $pass, $port);
$database->connect();
$pdo = $database->getConnection();
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $pdo->prepare("DELETE FROM alunos WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "<p class='success'>Cadastro deletado</p>"; //mensagem de sucesso ao deletar
    } else {
        echo "<p class='erro'>Erro ao deletar o cadastro</p>"; //mensagem de erro
    }
} else {
    echo "<p class='erro'>.</p>";
}
//Fim da etapa 6: 10/10/24 às 10:36
?>
<a href="index.php" class="botao-voltar">Voltar</a>

<style> /* style nao funcionou no css*/
       body {
    font-family: Arial, sans-serif;
}

.botao-voltar {
    display: inline-block;
    padding: 10px 20px;
    margin: 20px 0;
    background-color: #A3D8E5; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.botao-voltar:hover {
    background-color: #35ba33; 
    transform: translateY(-3px);
}

.botao-voltar:active {
    transform: translateY(1px);
}

.success {
    color: #00ff9d; /
    font-weight: bold;
}

.erro {
    color: #006aff; /
    font-weight: bold;
}
/*Fim da eapa 7: 03/10/24 às 11:00*/

    </style>