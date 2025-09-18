<?php
$host = "localhost";  // servidor
$usuario = "root";    // usuário do MySQL
$senha = "@Rafael_2006";          // senha do MySQL (no XAMPP normalmente é vazio)
$banco = "zoopet";    // nome do banco

// Criar conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>