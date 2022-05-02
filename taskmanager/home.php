<?php
require('db/check_session.php');// Checando Sessão
require_once ("db/conexao.php");//conecta ao banco de dados

$dados = mysqli_query($con, "SELECT * FROM task")->fetch_all(MYSQLI_ASSOC);/* traz os dados em chave e valor, acessa não somente o primeiro id*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskManager</title>
    <!-- style -->
    <link rel="stylesheet" href="style.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=
    Poppins:wght@400;500;700&display=swap" rel="stylesheet">  
</head>
<!--------->
<body>
    <header>
        <nav>
            <a class="logo" href="#">Task<strong>Manager</strong>.</a>
            <!-- <div class="sidebar">
                <a href="">Tela</a>
                <a href="">Tela</a>
                <a href="">Tela</a>
            </div> -->
            <a class="sair" href="db/sair.php">Sair</a>
        </nav>
    </header>
<!--------->
    <main>
        <section class="container">
            <br><br><br>
            <!-- quebraLinha -->
            <a class="btnCadastro" href="cadastro_tarefa.php">Cadastrar Tarefa</a>
            <div class="bodybox">
                <table border="1">
                    <tr class="trTitle" >
                        <td>Título</td>
                        <td>Data/Hora</td>
                        <td>Descrição</td>
                        <td></td>
                    </tr>
                    <?php foreach($dados as $valor) { ?>
                        <tr>
                            <td><?php echo($valor["titulo"]) ?></td>
                            <td><?php echo(date("d/m/Y H:i", strtotime($valor["datatempo"]))) ?></td>
                            <td><?php echo($valor["descricao"]) ?></td>
                            <td>
                                <a class="btnEdit" href="editar_tarefas.php?id_task=<?php echo($valor["id_task"]) ?>">Editar</a>
                                <a class="btnDel" href="db/deletar_tarefa.php?id_task=<?php echo($valor["id_task"]) ?>">Deletar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
    </main>
</body>
<!--------->
</html>