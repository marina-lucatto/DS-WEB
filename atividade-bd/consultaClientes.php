<?php
$conn = new mysqli('localhost', 'root', '', 'loja');

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nome</th><th>E-mail</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['email']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum cliente encontrado.";
}

$conn->close();
?>

