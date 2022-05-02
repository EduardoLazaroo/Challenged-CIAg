<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <!-- style -->
    <link rel="stylesheet" href="login.css">
</head>
<!--------->
<body>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="img/img_task.png">
            </div>
            <form action="db/verifica_login.php" method="post">
                <input type="text" name="login" placeholder="Insira seu login" autofocus>
                <input type="password" name="password" placeholder="Insira sua senha">
                <input class="button" type="submit" value="Entrar">
            </form>
            <p>Ainda não possui conta?<a href="cadastro.php" >Criar conta</a></p>
        </div>
    </section>
</body>
</html>