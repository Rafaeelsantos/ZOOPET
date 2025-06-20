<?php
session_start();

if (!isset($_SESSION['id'])) {
    $_SESSION['mensagem'] = 'Você precisa estar logado para acessar essa página.';
    header('Location: ../usuarios/usuario_login.php');
    exit;
}
?>