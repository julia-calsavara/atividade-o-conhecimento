
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $host = 'localhost';
        $db = 'cadastro_consulta';//atabase
        $user = 'julia';
        $pass = '123456';
        $port = 3307;

          //conexão banco de dados
        require_once 'db.php';
         //instância da conexão
        $database = new Database($host,$db,$user,$pass,$port);
        
        $database -> connect();

        $pdo = $database->getConnection();
    ?>
</head>
<body>
    <?php
    //verifica se os dados foram enviados 
if (isset($_GET['nome']) && isset($_GET['idade']) && isset($_GET['email']) && isset($_GET['curso'])){
//recebe dados
$nome = htmlspecialchars($_GET['nome']);
$idade = htmlspecialchars($_GET['idade']);
$email = htmlspecialchars($_GET['email']);
$curso = htmlspecialchars($_GET['curso']);

//exibe dados
echo "<h2>Cadastro realizado </h2>";
echo "<p><strong>Nome:</strong> ". $nome . "</p>";
echo "<p><strong>Idade:</strong> ". $idade. "</p>";
echo "<p><strong>Email:</strong> ". $email . "</p>";
echo "<p><strong>Curso:</strong> ". $curso . "</p>";

$stmt = $pdo->prepare("INSERT into alunos (nome, idade, email, curso) values ('$nome', '$idade', '$email','$curso');");
//exeuta
$stmt->execute();
}
 else{
    echo "Nenhum dado encontrado";
}
    //Fim da etapa 4: 03/10/24 às 9:27
    ?>
<a href="index.php" class="btn-cadastrar">Voltar</a>

<style>/*style não funcionou no css*/
h2 {
    color: #00ccff; 
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #b3e0e0; 
}

table th, table td {
    padding: 12px;
    text-align: center;
    border: 1px solid #35ba33; 
}

table th {
    background-color: #006aff; 
    color: white;
}

table tr:nth-child(even) {
    background-color: #a3f3e0; 
}

table tr:hover {
    background-color: #00eba4; 
    color: white;
}

.btn-cadastrar {
    display: block;
    text-align: center;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #00ff9d; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.btn-cadastrar:hover {
    background-color: #35ba33; 
}
/*Fim da eapa 7: 03/10/24 às 11:00*/

</style>
</body>
</html>