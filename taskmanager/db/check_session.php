<?php
// Checando Sessão
session_start();

if(!isset($_SESSION['id_user'])){
    header('Location:http://localhost/ciag/taskmanager');
}
