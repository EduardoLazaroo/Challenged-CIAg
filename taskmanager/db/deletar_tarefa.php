<?php
require('check_session.php');// Checando Sessão
require_once ("conexao.php");//conecta ao banco de dados

$idTask = $_REQUEST["id_task"];// Request do id task
// Delete
$query = "DELETE from task where id_task = '$idTask'";
$resultado = mysqli_query($con, $query);

if($resultado == true){
    header("Location:http://localhost/ciag/taskmanager/home.php");
}
