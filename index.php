<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/993/993687.png" type="image/x-icon">
    <title>Chat - Login</title>
</head>

<body>

    <div class="main">

        <div class="card">
            <h1>Bem vindo de volta!</h1>
            <p class="p1">Estamos muito animados em te ver novamente!</p>
            <form action="loginUsuario.php" method="post">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="senha" placeholder="Senha" required><br>
                <div class="button">
                    <button name="login">Login</button>
                </div>
            </form>
            <p class="p2">Não possui uma conta? <a href="view_cadastro.php"> Cadastre-se!</a></p>
        </div>
    </div>
    </div>
</body>

</html>