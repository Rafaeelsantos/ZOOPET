<?php
session_start();

// Se não houver usuário logado, redireciona para login
if (!isset($_SESSION['usuario_id'])) {
    header("Location: paginas/pagina_de_cadastro_e_login/realizar_login.php");
    exit;
}

// Aqui você pode usar o nome do usuário
$nome_usuario = $_SESSION['usuario_nome'];
?>



<div class="profile">
    <h1>Perfil do Usuário</h1>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</p>
</div>