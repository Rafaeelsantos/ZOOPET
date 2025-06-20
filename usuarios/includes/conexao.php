<?php
// Arquivo: includes/conexao.php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=zoopet", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>