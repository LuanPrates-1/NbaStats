<?php
// Configuração do banco de dados
$servername = "localhost"; // Nome do servidor
$username = "root";        // Usuário do banco de dados
$password = "";            // Senha do banco de dados
$dbname = "projetobaska";     // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>