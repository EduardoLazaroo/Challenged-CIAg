<?php
// Conexão com o banco de dados
$servidor = "localhost";
$password = "";
$usuario = "root";
$banco = "taskmanager";

$con = mysqli_connect($servidor, $usuario, $password, $banco);

// Checar conexão
if (mysqli_connect_errno()){
    echo "Falha ao conectar no MyAQL" . mysqli_connect_errno();
}
mysqli_select_db($con, $banco);

?>