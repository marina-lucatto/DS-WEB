<?php
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            echo"<script>alert('Esta faltando o medodo POST')
            window.locotion.href = 'cliente.php' ;
            </script>";

        
    }

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $observacao = $_POST['observacao'];

        include_once('conexao.php');

        echo "<h2>inserindo dados<h2>";
        $statement = $db ->prepare("INSERT INTO clientes (nome, email, observacao) VALUE (:nome, :email, :observacao)");

        $statement -> bindParam(':nome', $nome);
        $statement -> bindParam(':email', $email);
        $statement -> bindParam(':observacao', $observacao);
        
        $statement->execute();

        header ("Location: cliente.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <div class="container">
        <div class="formulario">
            <form action="" method="POST">
                <label for="name" >Nome:</label>
                <input type="text" name="nome">
                <br>
                <label for="email" >Email:</label>
                <input type="text" name="email">
                <br>
                <input type="submit">
            </form>

        </div>



<?php

$novoNome = "Bruno Attina";
$email = "bruno@gmail.com";
$stmt = $db->prepare('UPDATE clientes SET nome = :nome WHERE email
= :email');
$stmt->execute(array(
':nome' => $novoNome,
':email' => $email
));
if( $stmt->rowCount() > 0 ) {
echo "Ocorreram ".$stmt->rowCount()." alterações na tabela.";
} else {
echo 'Nada foi alterado.';
}

?>