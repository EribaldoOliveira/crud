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