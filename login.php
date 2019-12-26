<?php require 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="">Seu usuário:</label>
        <input type="text" name="user" placeholder="Insira o usuário" />
        <label for="">Sua senha:</label>
        <input type="password" name="pass" placeholder="Insira a senha" />
        <input type="submit" name="btnLogin" value="Entrar no sistema" />
    </form>
</body>
</html>