<?php
session_start();
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Busca o usuário pelo email
    $stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $usuario = $result->fetch_assoc();
        // Verifica a senha criptografada
        if (password_verify($senha, $usuario['senha'])) {
            // Senha correta -> cria sessão
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

            header("Location: ../../pagina_inicial/inicio.php");
            exit;
        } else {
            // Senha incorreta
            header("Location: ../realizar_login.php?erro=senha");
            exit;
        }
    } else {
        // Usuário não encontrado
        header("Location: ../realizar_login.php?erro=email");
        exit;
    }
}
?>