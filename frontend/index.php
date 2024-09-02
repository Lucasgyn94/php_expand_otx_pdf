<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Início da sessão
session_start();

// frontend/index.php
echo 'Index.php carregado<br>';

// Caminho para o autoload do Composer
require_once __DIR__ . '/../vendor/autoload.php';
echo 'Autoloader carregado<br>';

// Inclusão view de login
include __DIR__ . '/views/login.php';
echo 'Login.php carregado<br>';

// Caminho para o arquivo de rotas
require_once __DIR__ . '/../src/routes/web.php';
echo 'Routes carregado<br>';
?>