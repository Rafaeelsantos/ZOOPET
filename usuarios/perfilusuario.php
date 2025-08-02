<?php
require_once 'includes\verifica_login.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zoopet</title>
    <link rel="stylesheet" href="recursos\css\perfill.css">
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
                    <a href="..\inicio.php">
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
                    <a href="perfilusuario.php">
                        <div class="icon">
                            <div class="imgBx">
                                <img src="..\recursos\imagens\usuarios\profile.jpg">
                            </div>
                        </div>
                        <div class="text"><?php echo htmlspecialchars($_SESSION['nome']); ?></div>
                    </a>
                </li>
                <li style="--bg: #333;">
                    <a href="logout.php">
                        <div class="icon"><ion-icon name="log-out-outline"></ion-icon></div>
                        <div class="text">Sair</div>
                    </a>
                </li>
            </div>
        </ul>
    </div>



    <div class="content">
        <div class="profile-card">

            <div class="card-icon">
                <ion-icon name="create"></ion-icon>
            </div>


            <!-- Lado esquerdo: foto + info -->
            <div class="profile-header">
                <div class="imgBxx">
                    <div class="imgWrapper">
                        <img src="https://via.placeholder.com/80" alt="Foto de Perfil" id="profile-preview" />
                    </div>
                    <label for="edit-photo" class="edit-icon">
                        <ion-icon name="pencil"></ion-icon>
                    </label>
                    <input type="file" id="edit-photo" accept="image/*" style="display: none;" />
                </div>

                <div class="username"><?php echo htmlspecialchars($_SESSION['nome']); ?></p>
                </div>

                <div class="user-info">
                    <p><strong>Cidade: </strong><?php echo htmlspecialchars($_SESSION['cidade']); ?></p>
                    <p><strong>Telefone: </strong><?php echo htmlspecialchars($_SESSION['telefone']); ?></p>
                    <p><strong>Email: </strong><?php echo htmlspecialchars($_SESSION['email']); ?></p>
                    <p><strong>Idade: </strong><?php echo $_SESSION['idade']; ?></p>
                </div>
            </div>

            <!-- Lado direito: descrição + stats -->
            <div class="profile-body">
                <div class="profile-description">
                    <div class="description-box">
                        Sou um desenvolvedor apaixonado por tecnologia e inovação. Busco sempre aprender coisas novas e
                        contribuir com soluções criativas.
                    </div>
                </div>


                <div class="profile-stats">
                    <div class="stat-box">
                        <ion-icon name="paw"></ion-icon>
                        <p>10 pets adotados</p>
                    </div>

                    <div class="stat-box">
                        <ion-icon name="heart"></ion-icon>
                        <p>5 pets resgatados</p>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="..\recursos\js\inicio.js"></script>

</body>

</html>