<?php
if (isset($_SESSION['mensagem'])) {
    echo '<div class="mensagem">' . $_SESSION['mensagem'] . '</div>';
    unset($_SESSION['mensagem']);
}
?>