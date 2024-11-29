<?php
session_start();


if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    header('Location: dashboard.php'); 
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if (!empty($username) && !empty($password) && $username == "admin" && $password == "1234") {
        $_SESSION['username'] = $username; 
        if (isset($_POST['save_cookie'])) {
            setcookie('username', $username, time() + (86400 * 7), "/"); 
        }

        header('Location: dashboard.php'); 
        exit();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="index.php">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Entrar</button>
        <button type="submit" name="save_cookie">Salvar Cookie</button>
    </form>

    <?php if (isset($erro)): ?>
        <p style="color:red;"><?php echo $erro; ?></p>
    <?php endif; ?>
</body>
</html>