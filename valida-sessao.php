<?php
session_start();

// SE NÃO ESTIVER LOGADO "!ISSET", ELE JOGA DE VOLTA PARA TELA DE LOGIN
if(!isset($_SESSION['logado'])) {
    header('location:./login/index.php');
    exit;
}
?>