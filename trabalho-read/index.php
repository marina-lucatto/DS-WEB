<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Bem-vindo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Bem-vindo!<?= $_SESSION['user'] ?>!</h1>
        <a href='logout.php'>Logout</a>
    </body>
    </html>