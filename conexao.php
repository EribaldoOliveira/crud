<?php

$host = 'localhost';  // Definindo o host do banco de dados
$user = 'root';       // Nome de usu�rio do banco de dados
$password = '';       // Senha do banco de dados (em branco para o XAMPP, por exemplo)
$database = 'crud';   // Nome do banco de dados

// Estabelece a conex�o com o banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verificando se a conex�o falhou
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());  // Exibe erro e encerra a execu��o se a conex�o falhar
}

// Define o charset para evitar problemas de codifica��o (como com acentua��o)
mysqli_set_charset($conn, 'utf8');

?>
