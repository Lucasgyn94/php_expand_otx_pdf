<?php 
require_once ('../src/Login.php');

session_start();

var_dump($_SESSION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new Login($username, $password);
    $error = $login->autenticar();
}

// Verifica se o usuário está logado ANTES de incluir login.php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: dashboard.php');
    exit(); // Importante para parar a execução após o redirecionamento
} else { 
    include 'login.php'; 
}