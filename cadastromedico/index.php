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
  
  <h1>Lista de Médicos</h1>

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