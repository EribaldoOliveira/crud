<?php

$host = 'localhost';  // Definindo o host do banco de dados
$user = 'root';       // Nome de usuário do banco de dados
$password = '';       // Senha do banco de dados (em branco para o XAMPP, por exemplo)
$database = 'crud';   // Nome do banco de dados

// Estabelece a conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verificando se a conexão falhou
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());  // Exibe erro e encerra a execução se a conexão falhar
}

// Define o charset para evitar problemas de codificação (como com acentuação)
mysqli_set_charset($conn, 'utf8');

?>
