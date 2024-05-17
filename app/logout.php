<?php
session_start();

// Destroi todas as informações da sessão
session_destroy();

// Redireciona para a página de login
header('Location: login.php');
exit();
?>
