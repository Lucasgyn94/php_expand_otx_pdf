<?php

// Caminho absoluto para o autoload do Composer e configuração do banco de dados
require_once '/opt/lampp/htdocs/expansaOfx/vendor/autoload.php'; 
require_once '/opt/lampp/htdocs/expansaOfx/src/config/database.php'; 

use Lucas\ExpansaOfx\Models\User;
use Lucas\ExpansaOfx\Models\Conversion; 
use Lucas\ExpansaOfx\Services\AuthService;
use Lucas\ExpansaOfx\Services\ConversionService;
use Lucas\ExpansaOfx\Controllers\AuthController;
use Lucas\ExpansaOfx\Controllers\UserController;
use Lucas\ExpansaOfx\Controllers\AdminController;
use Lucas\ExpansaOfx\Controllers\ConversionController;

// Inicialização das classes e serviços requeridos
$userModel = new User($pdo);
$conversionModel = new Conversion($pdo);

$authService = new AuthService($userModel);
$conversionService = new ConversionService($conversionModel);

$authController = new AuthController($authService);
$userController = new UserController($userModel);
$adminController = new AdminController($userModel);
$conversionController = new ConversionController($conversionService, $conversionModel);

// Definição das rotas
if ($_SERVER['REQUEST_URI'] == '/login' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $authController->login($_POST);
} elseif ($_SERVER['REQUEST_URI'] == '/logout') {
    $authController->logout();
} elseif ($_SERVER['REQUEST_URI'] == '/register' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $userController->register($_POST);
} elseif ($_SERVER['REQUEST_URI'] == '/convert' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $conversionController->convert($_SESSION['user_id'], $_FILES['pdf_file']);
} elseif ($_SERVER['REQUEST_URI'] == '/activate-user') {
    $adminController->activateUser($_GET['id']);
} else {
    // Render views based on request URI
}

?>
