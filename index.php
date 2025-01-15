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

<a href="criar.php"><button>Cadastrar Novo Cliente</button></a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ações</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['cidade']; ?></td>
            <td><?php echo $row['estado']; ?></td>
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
</table>
