<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <!-- style -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div class="titleCadastro">
                Cadastro de Usuário
            </div>
            <form action="db/cad_usuario.php" method="post">
                <input type="text" name="name" placeholder="Insira seu nome" autofocus>
                <input type="email" name="email" placeholder="Insira seu email">
                <input type="password" name="password" id="password"  onkeyup="validaSenha()" placeholder="Nova senha">
                <input type="password" id="password2"  onkeyup="validaSenha()" placeholder="Repita a senha">
                <input class="button" type="submit" value="Cadastrar">
            </form>
            <p><a href="index.php" >Voltar</a></p>
        </div>
    </section>

    <script>
        // validação de senha em .JS
        function validaSenha(){
            $password = document.getElementById("password").value;
            $password2 = document.getElementById("password2").value;
            if($password != $password2){
                document.getElementById("password2").style.border = "red 1px solid";
            }else{
                document.getElementById("password2").style.border = "green 1px solid";
            }
        }
    </script>
</body>
</html>