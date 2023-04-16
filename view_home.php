<?php
require_once "class/Conexao.php";
require_once "class/Mensagem.php";
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
    <title>Oi <?php echo $_SESSION['nome']; ?></title>
</head>

<body>

    <?php require_once "view_nav.php"; ?>

    <div class="container">

        <h1 class="text text-center mb-3">☕-CHAT</h1>

        <table class="table table-dark">
            <thead>
                <th>Usuário</th>
                <th>Mensagem</th>
                <th>Excluir</th>
            </thead>

            <?php
            $mensagem = new Mensagem();
            foreach ($mensagem->listarMensagem() as $msg) { ?>

                <tr>
                    <?php if ($_SESSION['logado'] == $msg['usuario_idusuario']) { ?>
                        <td><a href="view_perfil.php"><?= $msg['nome']; ?></a></td>
                    <?php } else { ?>
                        <td><?= $msg['nome']; ?></td>
                    <?php } ?>

                    <td><?= $msg['mensagem']; ?></td>

                    <?php if ($_SESSION['logado'] === $msg['usuario_idusuario']) { ?>
                        <td><a class="text text-danger" href="excluirMensagem.php?idmensagem=<?= $msg['idmensagem']; ?>">Excluir</a></td>
                    <?php } else { ?>
                        <td></td>
                    <?php } ?>
                </tr>

            <?php } ?>
        </table>

        <form action="inserirMensagem.php" method="post" class="text text-center">
            <input style="width: 0em;" type="text" name="nome" value="<?= $_SESSION['nome']; ?>" required>
            <input type="text" name="mensagem" placeholder="Digite uma mensagem" required>
            <input type="hiden" name="usuario_idusuario" value="<?= $_SESSION['logado']; ?>" required>
            <button class="btn" name="enviarMensagem"><img src="img/enviar-mensagem.png" alt="enviar"></button>
        </form> <br><br>
    </div>
</body>

</html>
