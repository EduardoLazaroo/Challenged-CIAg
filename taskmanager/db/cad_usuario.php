<?php
require_once ("conexao.php");//conecta ao banco de dados

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);// MD5 Criptografia
// Insert users
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $resultado = mysqli_query($con, $sql);

if($resultado == true){
    header("Location:http://localhost/ciag/taskmanager/home.php");
}

?>










