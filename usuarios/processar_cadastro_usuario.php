<?php
// Arquivo: usuarios/processar_cadastro_usuario.php

require_once 'includes/conexao.php';

// Coleta os dados do formulário
$nome     = $_POST['nome']     ?? '';
$idade    = $_POST['idade']    ?? 0;
$email    = $_POST['email']    ?? '';
$telefone = $_POST['telefone'] ?? '';
$cidade   = $_POST['cidade']   ?? '';
$senha    = $_POST['senha']    ?? '';

// Valida idade mínima
if ($idade < 18) {
    echo "<script>alert('Você precisa ter pelo menos 18 anos para se cadastrar.'); window.history.back();</script>";
    exit;
}

// Verifica se o e-mail já está cadastrado
$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
$sql->execute([$email]);

if ($sql->rowCount() > 0) {
    echo "<script>alert('Este e-mail já está cadastrado.'); window.history.back();</script>";
    exit;
}

// (Opcional) criptografar a senha:
// $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Insere os dados no banco
$stmt = $pdo->prepare("INSERT INTO usuarios (nome, idade, email, telefone, cidade, senha) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->execute([$nome, $idade, $email, $telefone, $cidade, $senha]);

echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login_usuario.php';</script>";
exit;
?>
