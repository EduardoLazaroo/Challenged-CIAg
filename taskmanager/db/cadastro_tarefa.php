<?php
require('check_session.php');// Checando Sessão
require_once ("conexao.php");//conecta ao banco de dados

$titulo = $_POST['titulo'];
$datatempo = $_POST['datatempo'];
$descricao = $_POST['descricao'];
// Insert task
$query = "INSERT INTO task (titulo, datatempo, descricao) VALUES ('$titulo', '$datatempo', '$descricao')";

$resultado = mysqli_query($con, $query);

if($resultado == true){
    header("Location:http://localhost/ciag/taskmanager/home.php");
}