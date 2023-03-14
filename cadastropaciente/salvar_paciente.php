
<?php
session_start();
include("../login/conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$nascimento = filter_input(INPUT_POST, 'datanasc');
$cpf = filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'tel');
$rua = filter_input(INPUT_POST, 'rua');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$cep = filter_input(INPUT_POST, 'cep');

$sql = "INSERT INTO pacientes 
        (
          nome, 
          nascimento,
          cpf, 
          email, 
          telefone, 
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
          :rua, 
          :bairro, 
          :cidade, 
          :estado, 
          :cep
        )";

$query = $pdo->prepare($sql);
                      
$resultado = $query->execute([
  ':nome' => $nome, 
  ':nascimento' => $nascimento,
  ':cpf' => $cpf, 
  ':email' => $email, 
  ':telefone' => $telefone, 
  ':rua' => $rua, 
  ':bairro' => $bairro, 
  ':cidade' => $cidade, 
  ':estado' => $estado, 
  ':cep' => $cep
]);

$id = $pdo->lastInsertId();

if($id > 0){
  header('Location: index.php');
}else{
  header('Location: formulario.php');
}

  
?>