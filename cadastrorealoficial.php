<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se no site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="captain">
        <a href="index.php" class="logo"><img src="images/espada.png" alt=""></a>
        <h1>Cadastre-se</h1>
        <form action="cadastro-mysql.php" method="POST" class="form">
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="password">Senha</label>
                <input type="password" name="password" required>
            </div>
            <button>Cadastrar</button>
            <a href="index.php">Já tenho uma conta</a>
        </form>
    </div>
</body>
</html>