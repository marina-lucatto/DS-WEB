<?php
    include('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if (mysqli_query($conn, $query)) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro: " . mysqli_error($conn);
        }
    }
    ?>