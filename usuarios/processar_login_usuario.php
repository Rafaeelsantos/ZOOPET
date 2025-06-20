<?php
// Arquivo: usuarios/processar_login_usuario.php

session_start();
require_once 'includes/conexao.php'; // usando o PDO padrão $pdo

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

try {
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        // Comparação simples (sem hash)
        if ($senha === $usuario['senha']) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['idade'] = $usuario['idade'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['telefone'] = $usuario['telefone'];
            $_SESSION['cidade'] = $usuario['cidade'];


            header("Location: ../inicio.php");
            exit;
        } else {
            echo "<script>alert('Senha incorreta.'); window.history.back();</script>";
            exit;
        }
    } else {
        echo "<script>alert('Usuário não encontrado.'); window.history.back();</script>";
        exit;
    }
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}