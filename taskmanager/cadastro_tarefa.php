<?php
    require('db/check_session.php');// Checando Sessão
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro Tarefa</title>
        <!-- style -->
        <link rel="stylesheet" href="style.css">
        <!-- fonts -->
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=
        Poppins:wght@400;500;700&display=swap" rel="stylesheet"> 
    </head>
<!--------->
    <body>
        <section class="container">
            <a class="voltar" href="home.php">Voltar</a>
            <h3 class="title" >Cadastro de Tarefas</h3>
            <div id=cadTarefas >
                <center>
                    <form action="db/cadastro_tarefa.php" method="post">
                        <h1>Título</h1>
                        <input type="text" name="titulo" placeholder="Titulo">

                        <h1>Data e Hora</h1>
                        <input type="datetime-local" name="datatempo">

                        <h1>Descrição</h1>
                        <textarea name="descricao" id="" cols="45" rows="8" placeholder="Descrição"></textarea>
                        <br>
                        <button>Cadastrar</button>
                    </form>        
                </center>
            </div>
        </section>
    </body>
</html>