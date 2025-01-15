<?php

$host = 'localhost';  // Definindo o host do banco de dados
$user = 'root';       // Nome de usuário do banco de dados
$password = '';       // Senha do banco de dados (em branco para o XAMPP, por exemplo)
$database = 'crud';  // Nome do banco de dados

$conn = mysqli_connect($host, $user, $password, $database);  // Estabelece a conexão com o banco de dados

// Verificando se a conexão falhou
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());  // Exibe erro e encerra a execução se a conexão falhar
}

?>      