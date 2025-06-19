<?php require_once 'verifica_login.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu perfil</title>
</head>

<body>

    <?php
    // Pegando os dados da sessão para usar no HTML
    $nome = htmlspecialchars($_SESSION['nome'] ?? '');
    $email = htmlspecialchars($_SESSION['email'] ?? '');
    $cidade = htmlspecialchars($_SESSION['cidade'] ?? '');
    ?>

    <!-- Exibição dos dados do usuário: -->
    <section style="padding: 20px; text-align:center;">
        <h1>Bem-vindo, <?= $nome ?>!</h1>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Cidade:</strong> <?= $cidade ?></p>
        <a href="logout.php">Sair</a>
    </section>

</body>

</html>