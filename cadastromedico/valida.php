
<?php
session_start();
include("./login/conexao.php");

$nomeMED = filter_input(INPUT_POST, 'nome', 
FILTER_SANITIZE_STRING);
$nascimentoMED = filter_input(INPUT_POST, 'datanasc', 
FILTER_SANITIZE_STRING);
$cpfMED = filter_input(INPUT_POST, 'cpf', 
FILTER_SANITIZE_STRING);
$emailMED = filter_input(INPUT_POST, 'email', 
FILTER_SANITIZE_STRING);
$telefoneMED = filter_input(INPUT_POST, 'tel', 
FILTER_SANITIZE_STRING);
$crmMED = filter_input(INPUT_POST, 'crm', 
FILTER_SANITIZE_STRING);
$situacaoMED = filter_input(INPUT_POST, 'situacao', 
FILTER_SANITIZE_STRING);
$especialidadeMED = filter_input(INPUT_POST, 'especialidade', 
FILTER_SANITIZE_STRING);
$ruaMED = filter_input(INPUT_POST, 'rua', 
FILTER_SANITIZE_STRING);
$bairroMED = filter_input(INPUT_POST, 'bairro', 
FILTER_SANITIZE_STRING);
$cidadeMED = filter_input(INPUT_POST, 'cidade', 
FILTER_SANITIZE_STRING);
$estadoMED = filter_input(INPUT_POST, 'estado', 
FILTER_SANITIZE_STRING);
$cepMED = filter_input(INPUT_POST, 'cep', 
FILTER_SANITIZE_STRING);

$query = $pdo->prepare('SELECT  *
                        FROM    cadmedico
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