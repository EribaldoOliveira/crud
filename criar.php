<?php
// Conexão com o banco de dados
include('conexao.php');

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    // Prepara a consulta SQL para inserir no banco
    $sql = "INSERT INTO clientes (nome, email, cidade, estado) VALUES ('$nome', '$email', '$cidade', '$estado')";

    // Executa a consulta SQL
    if (mysqli_query($conn, $sql)) {
        echo "Cliente inserido com sucesso!";
        // Redireciona de volta para a página principal após a inserção
        header('Location: index.php');
        exit();
    } else {
        echo "Erro ao inserir cliente: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inserir Cliente</title>
</head>
<body>

<h1>Adicionar Novo Cliente</h1>

<!-- Formulário para inserir um novo cliente -->
<form method="POST" action="criar.php">
    <input type="text" name="nome" placeholder="Nome" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="cidade" placeholder="Cidade" required><br><br>
    <input type="text" name="estado" placeholder="Estado" required><br><br>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
