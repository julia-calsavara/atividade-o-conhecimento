<!DOCTYPE html>
<html lang="en">
    <head>
        <meta chatset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel= "stylesheet" href="style.css">
    </head>
<body>
    <form action="cadastro.php" method="GET">
        <input type="text" name="nome" placeholder="Nome"><br>
        <input type="text" name="idade" placeholder="Idade"><br>
        <input type="email" name="email" placeholder="E-mail"><br>
        <input type="text" name="curso" placeholder="Curso"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<style> /*style não funncionou no css*/
h2 {
    color: #00b894; /
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #00a8ff; 
}

table th, table td {
    padding: 12px;
    text-align: center;
    border: 1px solid #00b894; 
}

table th {
    background-color: #0984e3;
    color: white;
}

table tr:nth-child(even) {
    background-color: #74b9ff; 
}

table tr:hover {
    background-color: #00b894; 
    color: white;
}

.botao-cadastrar {
    display: block;
    text-align: center;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #00b894; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.botao-cadastrar:hover {
    background-color: #00b894; 
}

.botao-excluir {
    display: inline-block;
    padding: 8px 15px;
    background-color: #0984e3; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.botao-excluir:hover {
    background-color: ##00b894; 
    transform: scale(1.05);
}

.botao-excluir:active {
    transform: scale(0.95);
}
/*Fim da eapa 7: 03/10/24 às 11:00
</style>

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
    $stmt = $pdo->query("SELECT * FROM alunos"); 
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h2>Alunos Cadastrados</h2>
    <table border="2"> 
    <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>E-mail</th>
        <th>Curso</th>
        <th>Deletar</th>
    <?php foreach ($alunos as $aluno): ?>
    <tr>
        <td><?php echo htmlspecialchars($aluno['nome']); ?></td>
        <td><?php echo htmlspecialchars($aluno['idade']); ?></td>
        <td><?php echo htmlspecialchars($aluno['email']); ?></td>
        <td><?php echo htmlspecialchars($aluno['curso']); ?></td>
        <td>
            <a href="deletar.php?id=<?php echo $aluno['id']; ?>" class="botao-excluir" onclick="return confirm('Deseja excluir este cadastro?');">Excluir</a>
        </td>
    </tr>
    
    <?php endforeach; ?>
    <!--Fim da etapa 5: 03/10/2024 às 8:47 -->
 
</table>
