<?php
session_start();

require_once 'verifica_login.php';


if (!isset($_SESSION['id'])) {
    // Redireciona para login se não estiver logado (melhor que mostrar mensagem solta)
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="PT-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/inicio.css">
    <link rel="icon" href="https://imgur.com/y8GxgSO.png" type="image/x-icon">
    <title>ZOOPET</title>
</head>

<body>

    <!--------------------------------------------------------------- INÍCIO DO HEADER ----------------------------------------------------------------->
    <header>
        <div class="logo">
            <img src="https://imgur.com/5eEwTAd.png" alt="Logo">
        </div>

        <nav class="categories">
            <ul>
                <li><a href="inicio.php">INÍCIO</a></li>
                <li><a href="#category2">SOBRE NÓS</a></li>
                <li><a href="#category3">EMPRESA</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>

            <div class="profile-menu">
                <a href="perfil.php"><i class="fas fa-user-circle"></i></a>
                <div class="menu-icon" id="menuIcon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>

    <!----------------------------------------------------------------- FIM DO HEADER ------------------------------------------------------------------->



    <!--------------------------------------------------------------------- SIDEBAR --------------------------------------------------------------------->
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>



        <a href="javascript:void(0)" class="category">Pets</a>
        <ul class="subcategory hidden">
            <li><a href="#"><img src="https://imgur.com/zH4YYOx.png" alt="Cães">Cães</a></li>
            <li><a href="#"><img src="https://imgur.com/6qCN1SL.png" alt="Gatos">Gatos</a></li>
            <li><a href="#"><img src="https://imgur.com/ov6rggw.png" alt="Pássaros">Pássaros</a></li>
            <li><a href="#"><img src="https://imgur.com/yYBfsfQ.png" alt="Peixes">Peixes</a></li>
            <li><a href="#"><img src="https://imgur.com/LwCDXaL.png" alt="Hamsters">Hamsters</a></li>
            <li><a href="#"><img src="https://imgur.com/mklnTf4.png" alt="Coelhos">Coelhos</a></li>
            <li><a href="#"><img src="https://imgur.com/CYpUt21.png" alt="Porquinho da Índia">Porquinho da Índia</a>
            </li>
            <li><a href="#"><img src="https://imgur.com/Bnm9Hfe.png" alt="Tartaruga">Tartaruga</a></li>
            <li><a href="#"><img src="https://imgur.com/Ryd3IWZ.png" alt="Répteis">Répteis</a></li>
            <li><a href="#"><img src="https://imgur.com/bnL1Nim.png" alt="Áves Exóticas">Áves Exóticas</a></li>
        </ul>
    </div>
    <!------------------------------------------------------------------ FIM DO SIDEBAR -------------------------------------------------------------------->



    <!------------------------------------------------------------------ INÍCIO DO BANNER ------------------------------------------------------------------>
    <div class="banner" style="background-image: url('https://imgur.com/YLEGGiT.png');">
        <div class="banner-content">
            <img src="https://imgur.com/wtltCSV.png" alt="Imagem de Adoção de Animais" class="banner-image">
            <div class="banner-text">
                <h1>ADOTE, NÃO COMPRE!!!</h1>
                <p>Transforme vidas: adote um pet e ganhe um companheiro para sempre.</p>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------ FIM DO BANNER --------------------------------------------------------------------->



























    <!------------------------------------------------------------------ INÍCIO DAS LOGOS DAS EMPRESAS PARCEIRAS ------------------------------------------------------------------>
    <div class="partners">
        <div class="partner-logo">
            <img src="https://imgur.com/Q6KRDec.png" alt="Logo da Empresa 1">
        </div>
        <div class="partner-logo">
            <img src="https://imgur.com/Q6KRDec.png" alt="Logo da Empresa 2">
        </div>
        <div class="partner-logo">
            <img src="https://imgur.com/Q6KRDec.png" alt="Logo da Empresa 3">
        </div>
        <div class="partner-logo">
            <img src="https://imgur.com/Q6KRDec.png" alt="Logo da Empresa 4">
        </div>
    </div>
    <!------------------------------------------------------------------ FIM DAS LOGOS DAS EMPRESAS PARCEIRAS ---------------------------------------------------------------------->

















    <!------------------------------------------------------------------ INÍCIO DO RODAPÉ ------------------------------------------------------------------>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section contact">
                <h2>Contato</h2>
                <div class="social-icons">
                    <img src="https://imgur.com/gSwpkmQ.png" alt="Facebook">
                    <img src="https://imgur.com/AqwqTph.png" alt="LinkedIn">
                    <img src="https://imgur.com/8h6oFsu.png" alt="Email">
                </div>
            </div>
            <div class="footer-section about">
                <h2>Sobre Nós</h2>
                <p>Somos uma organização dedicada a promover a adoção responsável de animais e fornecer informações
                    valiosas para novos donos de pets.</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Adoção de Pets | Desenvolvido por ZOOPET</p>
        </div>
    </footer>
    <!------------------------------------------------------------------ FIM DO RODAPÉ ---------------------------------------------------------------------->
    <script src="recursos/js/inicio.js"></script>
</body>

</html>