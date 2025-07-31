<?php require_once 'usuarios/includes/verifica_login.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zoopet</title>
    <link rel="stylesheet" href="recursos\css\inicioo.css">
    <link rel="icon" href="recursos\imagens\adicionais\patas.png" type="image/x-icon">


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
                    <a href="#">
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
                    <a href="usuarios/perfilusuario.php">
                        <div class="icon">
                            <div class="imgBx">
                                <img src="recursos\imagens\usuarios\profile.jpg">
                            </div>
                        </div>
                        <div class="text">Rafael Santoos</div>
                    </a>
                </li>
                <li style="--bg: #333;">
                    <a href="usuarios/logout.php">
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
                <img src="recursos\imagens\adicionais\logo.png" alt="Logo" style="width: 150px; margin-bottom: 20px;">
                <h1><span>Adote um pet.</span></h1>
                <h2>É o único amor que vem com focinho e patinhas.</h2>
                <p style="max-width: 350px; margin-top: 10px;">
                    "Comprar? Jamais. O amor verdadeiro se adota!
                </p>
                <a href="#" class="join-button">Saiba Mais</a>
            </div>

            <!-- Imagem -->
            <div class="dog-image">
                <img src="recursos\imagens\pets\doog.png" alt="Dog">
            </div>

            <!-- Pata decorativa -->
            <img src="recursos\imagens\adicionais\patas.png" class="paw paw1" alt="pata decorativa">
            <img src="recursos\imagens\adicionais\patas.png" class="paw paw2" alt="pata decorativa">
        </div>
    </div>




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="recursos\js\inicioo.js"></script>

</body>

</html>