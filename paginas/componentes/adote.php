<?php
session_start();


if (!isset($_SESSION['usuario_id'])) {
    header("Location: paginas/pagina_de_cadastro_e_login/realizar_login.php");
    exit;
}

$nome_usuario = $_SESSION['usuario_nome'];
?>



<div class="profile">
    <h1>Perfil do Usuário</h1>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</p>
</div>