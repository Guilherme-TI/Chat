<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/993/993687.png" type="image/x-icon">
    <link rel="stylesheet" href="css/forms.css">
    <title>Chat - Cadastro</title>
</head>

<body>

    <div class="main">

        <div class="card">
            <h1>Criar uma conta</h1>
            <form action="cadastroUsuario.php" method="post">
                <input type="text" name="nome" placeholder="Nome" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="senha" placeholder="Senha" required><br>
                <div class="button">
                    <button name="cadastro">Cadastrar</button>
                </div>
            </form>
            <p class="p2">Já possui uma conta? <a href="index.php"> Acesse!</a></p>
        </div>
    </div>
    </div>
</body>

</html>