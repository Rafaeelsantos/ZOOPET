<?php
session_start();
session_unset();
session_destroy();

header("Location: ../../pagina_de_cadastro_e_login/realizar_login.php");
exit;
?>
