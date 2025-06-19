<?php
session_start();

// Remove todas as variáveis da sessão
session_unset();

// Destrói a sessão
session_destroy();

// Redireciona para a página de login (ou outra página pública)
header("Location: login.php");
exit;
?>