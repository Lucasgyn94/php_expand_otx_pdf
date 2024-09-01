<?php 
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard-container">
        <h2>Conversor ODX para PDF</h2>
        <form action="converter.php" method="post" enctype="multipart/form-data">
            <input type="file" name="odx_file" required>
            <button type="submit">Converter</button>
        </form>
    </div>
    
</body>
</html>