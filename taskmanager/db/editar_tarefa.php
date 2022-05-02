<?php
require('check_session.php');// Checando Sessão
require_once ("conexao.php");//conecta ao banco de dados

$titulo = $_POST['titulo'];
$datatempo = $_POST['datatempo'];
$descricao = $_POST['descricao'];
$idTask = $_POST["idTask"];
// Update
$query = "UPDATE task 
set titulo = '$titulo', datatempo = '$datatempo', descricao = '$descricao' 
WHERE id_task = '$idTask'";

$resultado = mysqli_query($con, $query);

if($resultado == true){
    echo($query);
    header("Location:http://localhost/ciag/taskmanager/home.php");
}