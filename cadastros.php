<?php
require "verificar-logado.php";
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros Emails</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="out">
        <form action="desconectar.php" method="POST">
            <button class="sair">Sair</button>
        </form>
    </div> 
    <div class="captain">
        <ul id="usuarios">
            <!-- 
            <li style="color: red;">

                <form action="excluir.php" method="POST">
                    <input type="hidden" name="email" value="
                    <button>Excluir</button>
                </form>
            </li>
             -->
        </ul>
    </div>
    <script>
        const ulElement = document.querySelector('#usuarios');
        async function getUsers(){
            const response = await fetch("/api/usuarios.php");
            const usuarios = await response.json();
            let ulBody = '';
            usuarios.forEach(usuario => {
                ulBody += `
                <li style="color: red;">
                ${usuario.email}
                    <form action="excluir.php" method="POST">
                        <input type="hidden" name="id" value="${usuario.id}"/>
                        <button>Excluir</button>
                    </form>
                </li>
                `
            });
            ulElement.innerHTML = ulBody;
        }
        getUsers();
    </script>
</body>
</html>