<?php
    include('index.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
       
        $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email')";
    }
    ?>