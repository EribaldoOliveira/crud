<?php

$host = 'localhost';  // Definindo o host do banco de dados
$user = 'root';       // Nome de usu�rio do banco de dados
$password = '';       // Senha do banco de dados (em branco para o XAMPP, por exemplo)
$database = 'crud';  // Nome do banco de dados

$conn = mysqli_connect($host, $user, $password, $database);  // Estabelece a conex�o com o banco de dados

// Verificando se a conex�o falhou
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());  // Exibe erro e encerra a execu��o se a conex�o falhar
}

?>      