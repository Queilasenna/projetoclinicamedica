<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0px;
    }

    h1 {
      text-align: center;
    }

    .background {
      width: 100vw;
      height: 100vh;
      position: fixed;
      z-index: -1000;
      left: 0;
      top: 0;
      opacity: 0.1;
      filter: blur(19px);
      background-color: #fff;
    }

    form {
      margin-left: 15px;
      margin-right: 40px;


    }
  </style>
  <title>Cadastrar Paciente</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="background">
  </div>

  <nav class="navbar navbar-light" style="background-color: #0f3e96;">
    <a class="navbar-brand" style="color: #fff" href="../login/home.php">JGPQ</a>
    <form class="form-inline">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" style="color: #fff" href="../login/home.php">Início</a>
        </li>
      </ul>
    </form>
  </nav>
  <!-- FINAL DO MENU AZUL -->
  <br>
  <ul class="nav nav-tabs">

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">Cadastro</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../cadastropaciente/formulario.php">Cadastrar Paciente</a>
        <a class="dropdown-item" href="formulario.php">Cadastrar Médico</a>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">Agenda</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Agendar Consulta</a>
        <a class="dropdown-item" href="#">Pacientes Agendados</a>
        <!-- <a class="dropdown-item" href="#">Controle de Pacientes</a> -->
        <!-- <a class="dropdown-item" href="#">Histórico de Consultas</a> -->
        <!-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Documentos</a> -->
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">Documentos</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Atestado Médico</a>
        <a class="dropdown-item" href="#">Receita Médica</a>

    </li>
  </ul>
  <br>
  <h1> Cadastro Médico</h1><br><br>
  <!-- FINAL DAS ABAS -->

  <form action="salvar_medico.php" method="POST">
    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="nome">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Patrícia Senna">
      </div>
      <div class="form-group col-md-4">
        <label for="datanasc">Data de Nascimento</label>
        <input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="">
      </div>
      <div class="form-group col-md-3">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Ex: 40492175492">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Ex: patricia94@...">
      </div>

      <div class="form-group col-md-2">
        <label for="tel">Telefone</label>
        <input type="tel" class="form-control" id="tel" name="tel" placeholder="18 4004-8922 ">
      </div>

      <div class="form-group col-md-2">
        <label for="crm">CRM</label>
        <input type="text" class="form-control" id="crm" name="crm" placeholder="Digite o CRM">
      </div>

      <div class="form-group col-md-2">
        <label>Situação</label>
        <select class="form-control" name="situacao" id="situacao">
          <option value="A">Ativo</option>
          <option value="I">Inativo</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label>Especialidade:</label>
        <select class="form-control" name="especialidade" id="especialidade">
          <option value="">Todas</option>
          <option value="1">Anestesiologia</option>
          <option value="2">Cancerologia</option>
          <option value="3">Cardiologia</option>
          <option value="4">Cirurgia Geral</option>
          <option value="5">Clinico Geral</option>
          <option value="6">Cirurgia Plastica</option>
          <option value="7">Coloproctologia</option>
          <option value="8">Dermatologia</option>
          <option value="9">Endocrinologia</option>
          <option value="10">Gastroenterologia</option>
          <option value="11">Geriatria</option>
          <option value="12">Ginecologia Obstetricia</option>
          <option value="13">Hematologia</option>
          <option value="14">Mastologia</option>
          <option value="15">Neurologia</option>
          <option value="16">Oftalmologia</option>
          <option value="17">Ortopedia</option>
          <option value="18">Pediatria</option>
          <option value="19">Psquiatria</option>
          <option value="20">Urologia</option>
        </select>
        <!-- <button type="button" class="limpaArea">Limpar</button> -->
      </div>
    </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="rua">Rua</label>
        <input type="text" class="form-control" id="rua" name="rua" placeholder="Ex: Rua Afonso Pena, nº47 ">
      </div>
      <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Ex: Bairro Novo Umuarama ">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade">
      </div>
      <div class="form-group col-md-4">
        <label for="inputEstado">Estado</label>
        <select id="estado" name="estado" class="form-control">
          <option selected>Escolher...</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
          <option value="EX">Estrangeiro</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputCEP">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep">
      </div>
    </div>

    <button type="submit" style="background-color: #0f3e96" class="btn btn-primary">Cadastrar</button>
  </form>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>