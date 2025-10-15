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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zoopet</title>
    <link rel="stylesheet" href="pagina_inicial_recursos/css/inicio.css">
    <link rel="icon" href="pagina_inicial_recursos\imagens\adicionais\pata.png" type="image/x-icon">


</head>

<body>

    <div class="sidebar">
        <ul>
            <li class="logo">
                <a href="#">
                    <div class="icon">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </a>
            </li>

            <div class="MenuList">
                <li style="--bg: #f44336;" class="active">
                    <a href="inicio.php">
                        <div class="icon"><ion-icon name="home-outline"></ion-icon></div>
                        <div class="text">Home</div>
                    </a>
                </li>
                <li style="--bg: #ffa117;">
                    <a href="#">
                        <div class="icon"><ion-icon name="person-outline"></ion-icon></div>
                        <div class="text">Profile</div>
                    </a>
                </li>
                <li style="--bg: #0fc70f;">
                    <a href="#">
                        <div class="icon"><ion-icon name="chatbubble-outline"></ion-icon></div>
                        <div class="text">inbox</div>
                    </a>
                </li>
                <li style="--bg: #2196f3;">
                    <a href="#">
                        <div class="icon"><ion-icon name="bar-chart-outline"></ion-icon></div>
                        <div class="text">Analystics</div>
                    </a>
                </li>
                <li style="--bg: #b145e9;">
                    <a href="#">
                        <div class="icon"><ion-icon name="cart-outline"></ion-icon></div>
                        <div class="text">Order</div>
                    </a>
                </li>
                <li style="--bg: #e91e63;">
                    <a href="#">
                        <div class="icon"><ion-icon name="settings-outline"></ion-icon></div>
                        <div class="text">Settings</div>
                    </a>
                </li>
            </div>

            <div class="bottom">
                <li style="--bg: #333;">
                    <a href="usuarios\perfilusuario.php">
                        <div class="icon">
                            <div class="imgBx">
                                <img src="pagina_inicial_recursos\imagens\usuarios\profile.jpg">
                            </div>
                        </div>
                        <div class="text"><?php echo htmlspecialchars($_SESSION['nome']); ?></div>
                    </a>
                </li>
                <li style="--bg: #333;">
                    <a href="paginas/pagina_de_cadastro_e_login/conexoes/logout.php">
                        <div class="icon"><ion-icon name="log-out-outline"></ion-icon></div>
                        <div class="text">Sair</div>
                    </a>
                </li>
            </div>
        </ul>
    </div>


    <!-- Conteúdo principal -->
    <div class="content">
        <div class="banner">
            <!-- Formas curvas decorativas -->
            <div class="curve curve-top"></div>
            <div class="curve curve-bottom"></div>

            <!-- Texto -->
            <div class="text-content">
                <img src="pagina_inicial_recursos\imagens\adicionais\logo.png" alt="Logo"
                    style="width: 150px; margin-bottom: 20px;">
                <h1><span>Adote um pet.</span></h1>
                <h2>É o único amor que vem com focinho e patinhas.</h2>
                <p style="max-width: 350px; margin-top: 10px;">
                    "Comprar? Jamais. O amor verdadeiro se adota!
                </p>
                <a href="#" class="join-button">Saiba Mais</a>
            </div>

            <!-- Imagem -->
            <div class="dog-image">
                <img src="pagina_inicial_recursos\imagens\pets\doog.png" alt="Dog">
            </div>

            <!-- Pata decorativa -->
            <img src="pagina_inicial_recursos\imagens\adicionais\patas.png" class="paw paw1" alt="pata decorativa">
            <img src="pagina_inicial_recursos\imagens\adicionais\patas.png" class="paw paw2" alt="pata decorativa">
        </div>
    </div>




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="pagina_inicial_recursos\js\inicio.js"></script>

</body>

</html>