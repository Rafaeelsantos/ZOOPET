<!DOCTYPE html>
<html lang="PT-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/formularios.css">
    <link rel="icon" href="https://imgur.com/y8GxgSO.png" type="image/x-icon">
    <title>LOGIN</title>
</head>

<body>
    <div class="container">
        <!-- LADO ESQUERDO: LOGO -->
        <div class="left-side">
            <img src="https://imgur.com/5eEwTAd.png" alt="Logo ZOOPET">
        </div>

        <!-- LADO DIREITO: FORMULÁRIO -->
        <div class="right-side">
            <div class="form-container">
                <h2>Login de Usuário</h2>
                <form action="processar_login_usuario.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

                    <button type="submit">Entrar</button>
                </form>
                <!-- Link para a página de cadastro -->
                <p style="text-align:center; margin-top: 10px;">Ainda não tem uma conta? <a href="cadastro_usuario.php"
                        style="color: #6b73ff;">Clique aqui para se cadastrar</a></p>
            </div>
        </div>
    </div>
</body>

</html>