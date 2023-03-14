
<?php
session_start();
include("conexao.php");

$usuario = filter_input(INPUT_POST, 'usuario', 
FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', 
FILTER_SANITIZE_STRING);

$query = $pdo->prepare('SELECT  *
                        FROM    login
                        WHERE   usuario = :usuario 
                        AND     senha = :senha');
                      
$query->execute(array(
  ':usuario' => $usuario,
  ':senha' => $senha,
));

if ($query ->rowCount()<> 0) {
  header("Location: home.php");
    } else {
      $_SESSION['msg'] = "Usuário e senha incorretos.";
      header("Location: index.php");
    }  

  
?>