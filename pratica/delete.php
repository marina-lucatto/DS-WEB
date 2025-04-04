<?php
$id = $_GET['id'];

include "conexao.php";

$stmt = $db->prepare("DELETE FROM clientes WHERE id = :id");
$stmt->bindParam(':id',$id);
$stmt->execute();
if ($stmt->rowCount() > 0){
    echo "deletou ".$stmt->rowCount()." linha";
}else{
    echo "não deletou nenhuma linha";
}
    header("location: cliente.php");
?>