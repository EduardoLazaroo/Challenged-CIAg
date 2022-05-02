<?php

session_start();

unset($_SESSION['id_user']);
unset($_SESSION['nome']);
unset($_SESSION['email']);

session_destroy();// Finaliza a session
header('location:../index.php');