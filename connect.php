<?php

session_start();

$dbname = 'logindb';
$dbuser = 'root';
$dbpass = 'root';
$dbhost = 'localhost';

$db = null;

$query = '';
$user_in = array();

try {
    $db = new PDO("mysql:dbname=" . $dbname . ";host=" . $dbhost, $dbuser, $dbpass);
} catch (PDOException $e) {
    die("Erro de conexão!" . $e->getMessage());
}

if (isset($_POST['btnLogin'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM login WHERE user = :user AND pass = :pass";
    $query = $db->prepare($query);
    $query->bindValue(":user", $user);
    $query->bindValue(":pass", $pass);
    $query->execute();

    if ($query->rowCount() > 0) {
        $user_in = $query->fetch();

        $_SESSION['login'] = $user_in['id'];
        header("Location: index.php");
    }
}

if (isset($_GET['logout'])) {
    unset($_SESSION['login']);
    header("Location: login.php");
}