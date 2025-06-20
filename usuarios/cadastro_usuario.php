<!DOCTYPE html>
<html lang="PT-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/formularios.css">
    <link rel="icon" href="https://imgur.com/y8GxgSO.png" type="image/x-icon">
    <title>CADASTRO</title>
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
                <h2>Cadastro de Usuário</h2>
                <form action="processar_cadastro_usuario.php" method="post">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

                    <label for="idade">Idade:</label>
                    <input type="number" id="idade" name="idade" min="1" placeholder="Digite sua idade" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>

                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" required>

                    <label for="cidade">Cidade:</label>
                    <select id="cidade" name="cidade" required>
                        <option value="">Selecione sua cidade</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Diadema">Diadema</option>
                    </select>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>

                    <button type="submit">Cadastrar</button>
                </form>
                <!-- Link para a página de login -->
                <p style="text-align:center; margin-top: 10px;">Já tem uma conta? <a href="login_usuario.php"
                        style="color: #6b73ff;">Clique aqui para fazer login</a></p>
            </div>
        </div>
    </div>

    <script src="recursos/js/validar_idade.js"></script>

</body>

</html>