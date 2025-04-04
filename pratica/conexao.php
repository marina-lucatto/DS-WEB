<?php

//MySQL
$db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");
/*$dados = $db->query("SELECT * FROM clientes");
$todos = $dados->fetch(PDO::FETCH_ASSOC);
foreach($todos as $linha){
    echo "E-mail: ".$linha['email'];
    "<br><br>";
}


//var_dump($db);
//echo "<br><br>";
//print_r($db);


print_r($todos);
echo "<br>";
echo $todos['email'];

echo "<br><br><br>";
echo "<h2>Exemplo de consulta com muitas linhas</h2>";
$dados = $db->query("SELECT * FROM clientes");
$todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registro retornados


echo "<h2>Inserindo dados</h2>";
$statement = $db->prepare("INSERT INTO clientes(nome, email) VALUES(?, ?)");
$nome = "attina";
$email = "attina@gmail.com";

$statement->execute(array($nome, $email));
$statement->execute(array("Scudeler", "scudeler@gmail.com"));
$statement->execute(array("Tom Mate", "tommate@gmail.com"));
*/
?>


