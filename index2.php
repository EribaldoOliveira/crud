<!-- <?php
// Conexão com o banco de dados
// include('conexao.php');

// Consulta para listar todos os clientes
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conn, $sql);

// Exibe a lista de clientes
echo "<h1>Lista de Clientes</h1>";

if (mysqli_num_rows($result) > 0) {
    // Se houver clientes, exibe cada um
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Nome: " . $row['nome'] . " | Email: " . $row['email'] . " | Cidade: " . $row['cidade'] . " | Estado: " . $row['estado'] . "<br>";
    }
} else {
    echo "Nenhum cliente encontrado.";
}
?>

<!-- Link para adicionar um novo cliente -->
<a href="criar.php"><button>Adicionar Novo Cliente</button></a>
<a href="editar.php?id=<?php echo $row['id']; ?>"><button>Editar</button></a>
<a href="excluir.php?id=<?php echo $row['id']; ?>"><button>Excluir</button></a>

<hr> <br><br>  
**************************************



<?php
include('conexao.php');

// Consulta para obter todos os registros
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conn, $sql);

// Verifica se a consulta foi bem-sucedida
if (!$result) {
    die("Erro ao buscar dados: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <!-- Botão para cadastrar novo cliente -->
    <a href="criar.php"><button>Cadastrar Novo Cliente</button></a>
    <br><br>

    <!-- Tabela de clientes -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ações</th>
        </tr>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <!-- Preenchendo a tabela com os dados do banco -->
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['cidade'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['estado'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <!-- Botão Editar -->
                        <a href="editar.php?id=<?php echo $row['id']; ?>"><button>Editar</button></a>
                        <!-- Botão Excluir -->
                        <a href="excluir.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">
                            <button>Excluir</button>
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <!-- Mensagem caso não haja registros -->
            <tr>
                <td colspan="6" style="text-align: center;">Nenhum cliente cadastrado.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
