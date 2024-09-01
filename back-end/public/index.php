<?php 
require_once ('../src/Login.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new Login($username, $password);
    $error = $login->autenticar();
}

// Verifica se o usuário está logado ANTES de incluir login.php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: dashboard.php');
    exit(); 
} else { 
    include 'login.php'; 
}