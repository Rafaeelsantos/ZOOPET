<?php
require_once 'includes/verifica_login.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="recursos/css/perfil.css">
</head>
<body>
    <h1>Perfil de <?php echo htmlspecialchars($_SESSION['nome']); ?></h1>

    <div class="perfil-info">
        <p><strong>ID:</strong> <?php echo $_SESSION['id']; ?></p>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($_SESSION['nome']); ?></p>
        <p><strong>Idade:</strong> <?php echo $_SESSION['idade']; ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <p><strong>Telefone:</strong> <?php echo htmlspecialchars($_SESSION['telefone']); ?></p>
        <p><strong>Cidade:</strong> <?php echo htmlspecialchars($_SESSION['cidade']); ?></p>
    </div>

</body>
</html>