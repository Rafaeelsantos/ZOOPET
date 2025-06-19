<?php
// conexao.php
$host = 'localhost';
$dbname = 'zoopet';
$username = 'root'; // ou outro nome se você alterou
$password = '';     // senha do seu MySQL, deixe vazio se for o padrão no XAMPP

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}