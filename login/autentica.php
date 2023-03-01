<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // VALIDAR OS VALORES VINDOS NAS VARIAVEIS
    if($usuario == 'a' && $senha =='1') {
        $_SESSION['logado'] = true;

        // REDIRECIONAR O USUARIO PARA A TELA DE SISTEMA DE LOGIN
        header('location:../home.php');
        exit;
    } else {
        header("location:index.php?msg=erro_login");
    }

}else {
    header("location:index.php?msg=erro_dados");
}

?>