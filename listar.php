<?php

include('conexao.php');


$sql = "SELECT * FROM clientes";  // Consulta SQL para selecionar todos os dados da tabela 'clientes'
$result = mysqli_query($conn, $sql);  // Executa a consulta e armazena o resultado na variável $result

// Verifica se a consulta retornou algum resultado
if (mysqli_num_rows($result) > 0) {
    // Se houver resultados, itera sobre as linhas retornadas
    while ($row = mysqli_fetch_assoc($result)) {
        // Exibe as informações de cada cliente
        echo "Nome: " . $row['nome'] . " | Email: " . $row['email'] . "<br>";
    }
} else {
    echo "Nenhum cliente encontrado.";  // Exibe uma mensagem caso nenhum cliente seja encontrado
}



?>
