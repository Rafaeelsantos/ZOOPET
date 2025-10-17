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
    <link rel="icon" href="pagina_inicial_recursos\imagens\adicionais\pata.png" type="image/x-icon">

    <?php
    $css_dir = 'pagina_inicial_recursos/css';
    $css_files = glob($css_dir . '/*.css');
    foreach ($css_files as $css) {
        echo '<link rel="stylesheet" href="' . $css . '">' . "\n";
    }
    ?>



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
                    <a href="#" data-page="home">
                        <div class="icon"><ion-icon name="home-outline"></ion-icon></div>
                        <div class="text">Inicio</div>
                    </a>
                </li>
                <li style="--bg: #ffa117;">
                    <a href="#" data-page="adote">
                        <div class="icon"><ion-icon name="person-outline"></ion-icon></div>
                        <div class="text">Adote</div>
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
                        <div class="text"><?php echo htmlspecialchars($_SESSION['usuario_nome']); ?></div>
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


    <div class="content" id="content">
        <?php include 'paginas/componentes/home.php'; ?>
    </div>






    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="pagina_inicial_recursos\js\inicio.js"></script>
    <script src="pagina_inicial_recursos\js\elementosPaginas.js"></script>

</body>

</html>