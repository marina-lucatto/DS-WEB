<?php
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$estoque = $_POST['estoque'];

$conn = new mysqli('localhost', 'root', '', 'loja');

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO produto (nome, valor, estoque) VALUES ('$nome', $valor, $estoque)";
if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
