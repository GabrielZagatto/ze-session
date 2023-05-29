<?php
session_start();
unset($_SESSION['autenticado']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ze - Sessao Sistema</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="captain">
        <a href="index.php" class="logo"><img src="images/espada.png" alt=""></a>
        <h1>Login</h1>
        <form action="autenticar.php" method="POST" class="form">
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div>
                <label for="password">Senha</label>
                <input type="password" name="password" required>
            </div>
            <button>Entrar</button>
            <a href="cadastrorealoficial.php">Não tenho uma conta</a>
        </form>
    </div>
    <script>
        console.log("OI sdss")
    </script>
</body>
</html>