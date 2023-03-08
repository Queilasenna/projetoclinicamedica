
<?php
session_start();
include("../login/conexao.php");

$nomeMED = filter_input(INPUT_POST, 'nome');
$nascimentoMED = filter_input(INPUT_POST, 'datanasc');
$cpfMED = filter_input(INPUT_POST, 'cpf');
$emailMED = filter_input(INPUT_POST, 'email');
$telefoneMED = filter_input(INPUT_POST, 'tel');
$crmMED = filter_input(INPUT_POST, 'crm');
$situacaoMED = filter_input(INPUT_POST, 'situacao');
$especialidadeMED = filter_input(INPUT_POST, 'especialidade');
$ruaMED = filter_input(INPUT_POST, 'rua');
$bairroMED = filter_input(INPUT_POST, 'bairro');
$cidadeMED = filter_input(INPUT_POST, 'cidade');
$estadoMED = filter_input(INPUT_POST, 'estado');
$cepMED = filter_input(INPUT_POST, 'cep');

$sql = "INSERT INTO medicos 
        (
          nome, 
          nascimento,
          cpf, 
          email, 
          telefone, 
          crm, 
          situacao, 
          especialidade, 
          rua, 
          bairro, 
          cidade, 
          estado, 
          cep
        )
        VALUES (
          :nome, 
          :nascimento,
          :cpf, 
          :email, 
          :telefone, 
          :crm, 
          :situacao, 
          :especialidade, 
          :rua, 
          :bairro, 
          :cidade, 
          :estado, 
          :cep
        )";

$query = $pdo->prepare($sql);
                      
$resultado = $query->execute([
  ':nome' => $nomeMED, 
  ':nascimento' => $nascimentoMED,
  ':cpf' => $cpfMED, 
  ':email' => $emailMED, 
  ':telefone' => $telefoneMED, 
  ':crm' => $crmMED, 
  ':situacao' => $situacaoMED, 
  ':especialidade' => $especialidadeMED, 
  ':rua' => $ruaMED, 
  ':bairro' => $bairroMED, 
  ':cidade' => $cidadeMED, 
  ':estado' => $estadoMED, 
  ':cep' => $cepMED
]);

$id = $pdo->lastInsertId();

if($id > 0){
  header('Location: index.php');
}else{
  header('Location: formulario.php');
}

  
?>