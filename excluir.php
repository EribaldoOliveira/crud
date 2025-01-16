<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Executa a consulta para excluir o cliente
    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Cliente excluído com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}
?>
