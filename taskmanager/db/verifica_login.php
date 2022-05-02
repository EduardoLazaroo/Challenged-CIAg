<?php
//conecta ao banco de dados
require_once("conexao.php");
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$email = $_POST['login'];
$password = md5($_POST['password']);

// A vriavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$query = "select * from users where email = '".$email."' and password = '".$password."'";

$result = mysqli_query($con, $query);
/* Logo abaixo temos um bloco com if e else, verificando 
se a variável $result foi bem sucedida, ou seja se ela estiver 
encontrado algum registro idêntico o seu valor será igual a 1, 
se não, se não tiver registros seu valor será 0. 

Dependendo do resultado ele redirecionará para a pagina site.php 
ou retornara  para a pagina do formulário inicial para que se 
possa tentar novamente realizar o login */

//echo "numero de Linhas: ".mysqli_num_rows($result);

if(mysqli_num_rows($result) > 0)
{
    $dados = mysqli_fetch_array($result);
    $_SESSION['id_user']   = $dados['id_user'];
    $_SESSION['name']   = $dados['name'];
    $_SESSION['email']  = $dados['email'];
    header('location:http://localhost/ciag/taskmanager/home.php');
}
else
{
	echo "<script>alert('Login ou senha inválido(a), tente novamente.');</script>";
  unset ($_SESSION['login']);
  unset ($_SESSION['password']);
  header('location:http://localhost/ciag/taskmanager/index.php');
}

?>