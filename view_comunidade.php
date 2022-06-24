<?php
require_once "class/Conexao.php";
require_once "class/Usuario.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/993/993687.png" type="image/x-icon">
    <title>Chat - Comunidade</title>
</head>

<body>

    <?php require_once "view_nav.php"; ?>

    <div class="container text text-center">
        <h2 class="text mb-3">Comunidade</h2>

        <?php
        $usuarios = new Usuario();
        foreach ($usuarios->listarUsuario() as $u) {
        ?>

            <div class="usuarios mb-3">
                <legend><img src="img/usuario.png"> <?= $u['nome']; ?></legend><br>
            </div>
        <?php } ?>
    </div>
</body>

</html>