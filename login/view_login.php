<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização dos Usuários</title>

    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/grid.css">

</head>
<body>

    <?php 
        include("_menu.php");
    ?>

    <div class="row centralizar-h">
        <h1 class="titulo">VISUALIZAÇÃO DE USUÁRIOS</h1>
    </div>

    <div class="container">
        <?php 
            require_once("view_loginbd.php");
            if($total > 0){
        ?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th width="100">IMG</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th width="60">STS</th>
                    <th width="60">ATU</th>
                    <th width="60">EXC</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach($dados as $linha)
                    {
                ?>
                <tr>
                    <td><?=$linha["idLogin"];?></td>
                    <td><img src="<?='./imagens/'.$linha['fotoLogin'];?>" width="60"></td>
                    <td><?=$linha["nomeLogin"];?></td>
                    <td><?=$linha["emailLogin"];?></td>
                    <td><?=$linha["statusLogin"];?></td>
                    <td><a href="atu_login.php?id=<?=$linha['idLogin'];?>"><img src="_img/editar2.png" width="32" alt="Atu"></a></td>
                    <td><a href="exc_login.php?id=<?=$linha['idLogin'];?>"><img src="_img/excluir2.png" width="32" alt="Exc"></a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <?php
            }
            else
            {
                echo "<h1 class='titulo'>Não há usuários cadastrados!</h1>";
            }
        ?>
    </div>
</body>
</html>