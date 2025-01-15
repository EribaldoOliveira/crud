<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Cliente excluído com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}
?>
