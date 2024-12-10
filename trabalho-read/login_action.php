<?php
    session_start();
    include('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($senha, $user['senha'])) {
                $_SESSION['user'] = $user['nome'];
                setcookie('user', $user['nome'], time() + (86400 * 7)); 
                header('Location: index.php');
                exit();
            }
        }
        echo "Usuário ou senha inválidos.";
    }
    ?>