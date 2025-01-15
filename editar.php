<?php
include('conexao.php');

// Verifica se o formulário foi enviado para atualizar os dados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    // Atualiza os dados no banco de dados
    $sql = "UPDATE clientes SET nome='$nome', email='$email', cidade='$cidade', estado='$estado' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Cliente atualizado com sucesso!";
        header("Location: index.php"); // Redireciona para o index após a atualização
        exit;
    } else {
        echo "Erro ao atualizar cliente: " . mysqli_error($conn);
    }
}

// Busca os dados do cliente com base no ID fornecido
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Cliente não encontrado.";
        exit;
    }
} else {
    echo "ID do cliente não foi fornecido.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cliente</title>
</head>
<body>
    <form method="POST" action="editar.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="nome" value="<?php echo htmlspecialchars($row['nome']); ?>" required>
        <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
        <input type="text" name="cidade" value="<?php echo htmlspecialchars($row['cidade']); ?>" required>
        <input type="text" name="estado" value="<?php echo htmlspecialchars($row['estado']); ?>" required>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
