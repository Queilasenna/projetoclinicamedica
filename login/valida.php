
<?php
session_start();
include("conexao.php");

$usuarioLOG = filter_input(INPUT_POST, 'usuario', 
FILTER_SANITIZE_STRING);
$senhaLOG = filter_input(INPUT_POST, 'senha', 
FILTER_SANITIZE_STRING);

$query = $pdo->prepare('SELECT  *
                        FROM    login
                        WHERE   usuarioLOG = :usuario 
                        AND     senhaLOG = :senha');
                      
$query->execute(array(
  ':usuario' => $usuarioLOG,
  ':senha' => $senhaLOG,
));

if ($query ->rowCount()<> 0) {
  header("Location: home.php");
    } else {
      $_SESSION['msg'] = "Usuário e senha incorretos.";
      header("Location: index.php");
    }  

  
?>