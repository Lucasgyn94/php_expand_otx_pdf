<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="index.php" method="post">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha">
            <button>Entrar</button> 
        </form>
        <?php
            if (isset($error)) {
                echo '<p>' . $error . '</p>';
            }
        ?>
    </div>
    
</body>
</html>