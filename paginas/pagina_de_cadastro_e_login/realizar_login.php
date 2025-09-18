<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - ZOOPET</title>
    <!-- Fontes e ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Estilos principais -->
    <link rel="stylesheet" href="pagina_de_cadastro_recursos/css/realizar_cadastro.css">
    <!-- Estilos de mensagens -->
    <link rel="stylesheet" href="pagina_de_cadastro_recursos/css/mensagens.css">

    <link rel="icon" href="pagina_de_cadastro_recursos/imagens/adicionais/patas.png" type="image/x-icon">
</head>



<body>
    <div class="container">
        <!-- Painel esquerdo -->
        <div class="left-panel">
            <h2>Ainda não tem cadastro? 🐾</h2>
            <p>Cadastre-se no ZOOPET e faça parte da nossa missão!</p>
            <a href="realizar_cadastro.php"><button>CADASTRAR</button></a>
        </div>

        <!-- Painel direito -->
        <div class="right-panel">
            <h2>Login</h2>
            <p>Olá, hoje um pet aguarda o seu resgate! ❤️</p>

            <div class="social-icons">
                <a href="#" class="google"><i class="fab fa-google"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
            </div>

            <div class="or">ou</div>
            <p>Realizar login</p>

            <!-- Mensagem de erro -->
            <?php if (isset($_GET['erro'])): ?>
                <?php if ($_GET['erro'] === 'email'): ?>
                    <div class="error-message">
                        <i class="fa fa-exclamation-circle"></i>
                        Usuário não encontrado!
                    </div>
                <?php elseif ($_GET['erro'] === 'senha'): ?>
                    <div class="error-message">
                        <i class="fa fa-exclamation-circle"></i>
                        Senha incorreta!
                    </div>
                <?php endif; ?>
            <?php endif; ?>


            <form action="conexoes/login.php" method="POST">
                <div class="input-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <button type="submit">Entrar</button>
            </form>

        </div>
    </div>
</body>

</html>