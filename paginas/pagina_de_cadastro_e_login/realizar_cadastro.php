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
            <h2>Bem-vindo de volta ao ZOOPET 🐾</h2>
            <p>Entre para continuar ajudando nossos amigos de quatro patas.</p>
            <a href="realizar_login.php"><button>ENTRAR</button></a>
        </div>

        <!-- Painel direito -->
        <div class="right-panel">
            <h2>Cadastre-se</h2>
            <p>Faça parte da família ZOOPET e ajude a transformar vidas! ❤️</p>

            <div class="social-icons">
                <a href="#" class="google"><i class="fab fa-google"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
            </div>

            <div class="or">ou</div>
            <p>Preencha os dados abaixo para criar sua conta</p>

            <!-- Mensagem de erro -->
            <!-- Mensagens -->
            <?php if (isset($_GET['erro']) && $_GET['erro'] === 'email'): ?>
                <div class="error-message">
                    <i class="fa fa-exclamation-circle"></i>
                    Este e-mail já está cadastrado!
                </div>
            <?php elseif (isset($_GET['erro']) && $_GET['erro'] === 'bd'): ?>
                <div class="error-message">
                    <i class="fa fa-triangle-exclamation"></i>
                    Ocorreu um erro no cadastro. Tente novamente.
                </div>
            <?php elseif (isset($_GET['sucesso'])): ?>
                <div class="success-message">
                    <i class="fa fa-check-circle"></i>
                    Usuário cadastrado com sucesso! 🎉
                </div>
            <?php endif; ?>


            <form action="conexoes/cadastrar.php" method="POST">
                <div class="input-group">
                    <i class="fa fa-user"></i>
                    <input type="text" name="nome" placeholder="Nome completo" required>
                </div>
                <div class="input-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <button type="submit">CADASTRAR</button>
            </form>
        </div>
    </div>
</body>

</html>