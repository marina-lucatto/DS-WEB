<?php
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            echo"<script>alert('Esta faltando o medodo POST')
            window.locotion.href = 'cliente.php' ;
            </script>";

        
    }

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $observacao = $_POST['observacao'];
        $id = $_POST['id'];

        include_once('conexao.php');

        $statement = $db ->prepare("UPDATE clientes SET nome = :nome, email = :email, observacao = :observacao WHERE id = :id");
        $statement -> bindParam(':nome', $nome);
        $statement -> bindParam(':email', $email);
        $statement -> bindParam(':observacao', $observacao);
        $statement -> bindParam(':id', $id);
        $statement->execute();

        header ("Location: cliente.php");
?>