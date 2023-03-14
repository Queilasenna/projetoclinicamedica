
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tela Inicial</title>
    <style>
    
    .background {
      width: 100vw;
      height: 100vh;
      position: fixed;
      z-index: -1000;
      left: 0;
      top: 0;
      /* opacity: 0.4; */
      /* filter: blur(4px); */
      background-image: url('clinica.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }
    </style>
</head>

<body>
    <div class="background"></div>

    <nav class="navbar navbar-light" style="background-color: #0f3e96;">
        <a class="navbar-brand" style="color: #fff" href="#">JGPQ</a>
        <form class="form-inline">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" style="color: #fff" href="index.php">Sair</a>
                </li>
            </ul>
        </form>
    </nav>
    <br>

    <!-- FIM DO MENU AZUL -->

    <ul class="nav nav-tabs">
        <li class="nav-item">
             <a class="nav-link active" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Cadastro</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="../cadastropaciente/formulario.php">Cadastrar Paciente</a>
                <a class="dropdown-item" href="../cadastromedico/formulario.php">Cadastrar Médico</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Agenda</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Agendar Consulta</a>
                <a class="dropdown-item" href="#">Pacientes Agendados</a>
                <!-- <a class="dropdown-item" href="#">Controle de Pacientes</a> -->
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
    <!-- FIM DO MENU COM ABAS -->




















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