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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>

   <style>
        table {
            width: 80%;
            margin: 20px auto; /* Centraliza a tabela */
            border-collapse: collapse;
            border: 2px solid #ddd;
            background-color: #f9f9f9;
            table-layout: auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        button {
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            opacity: 0.9;
        }
        /* Botões com cores específicas */
        .btn-cadastrar {
            background-color: #28a745; /* Verde */
        }
        .btn-editar {
            background-color: #ffc107; /* Laranja */
        }
        .btn-excluir {
            background-color: #dc3545; /* Vermelho */
        }
        @media (max-width: 768px) {
            table {
                width: 100%;
                font-size: 14px;
            }
            th, td {
                padding: 8px;
            }
        }

        h1 {
            text-align: center;
        }
    </style>

</head>
<body>


    <h1>Lista de Clientes</h1>

        <div style="text-align: center;">

            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th  style="width: 17%;">Ações</th> <!-- Corrigido -->
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($row['cidade'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($row['estado'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td>
                         
                            <a href="editar.php?id=<?php echo $row['id']; ?>"><button class="btn-editar">Editar</button></a>
                            
                            <a href="excluir.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')"><button class="btn-excluir">Excluir</button></a>
        
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>


<br>
<br>
<br>

           
         <div style="text-align: center; margin-bottom: 20px;">
             <a href="criar.php"><button class="btn-cadastrar">Cadastrar Novo Cliente</button></a>
         </div>


</body>
</html>
