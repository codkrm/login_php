<?php 
    require 'connect.php'; 

    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Bem vindo ao sistema!</h2>
    <a href="connect.php?logout">Sair do sistema</a>
</body>
</html>