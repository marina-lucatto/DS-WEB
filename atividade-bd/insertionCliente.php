<?php
$nome = $_POST['nome'];
$email = $_POST['email'];

$conn = new mysqli('localhost', 'root', '', 'loja');

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO cliente (nome, email) VALUES ('$nome', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
