<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>business System</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href="cliente.php" class="meumenu meumenu-active" title="Clientes">Clientes</a></li>
            <li><a href="#" class="meumenu" title="Produtos">Produtos</a></li>
            <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
        </ul>
    </div>
    <div class="container">
        <hr>
        <?php  
        if($_SERVER['REQUEST-METHOD'] != 'GET' OR !isset($_GET['id'])){
            header("location: cliente.php");
        }
        include 'conexao.php';
        $id = $_GET['id'];
        $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt ->bindParam(':id', $id);
        $stmt -> execute();
        $dados = $stmt->fetchALL(PDO::FETCH_ASSOC); //todos os registros retornados
        

            $idCliente = $dados['id'];
            $nomeCliente = $dados['nome'];
            $emailCliente = $dados['email'];
            $observacaoCliente = $dados['observacao'];
    ?>
        <div class="formulario">
            <form action="clienteUpdate.php" id= "<?=$idCliente;?>" method="POST" name="formulario" onsubmit="return validarDadosCliente()">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value="<?= $nomeCliente;?>">
                <p class="erro-input" id="erro-nome"></p>
                
                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" value="<?= $emailCliente;?>">
                <p class="erro-input" id="erro-email"></p>

                <label for="observacao">Observação do Cliente:</label>
                <textarea name="observacao" cols="30" rows="4" id="observacao"><?= $emailCliente;?></textarea>
                <p class="erro-input" id="erro-observacao"></p>
               
                <input type="submit">
            </form>
        </div>
    <table id="clientes">
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>observacao</th>
            <th>editar</th>
            <th>excluir</th>
        </tr>
    
   
    </table>
    </div>
    <script src="./assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/ee5c0f3e53.js" crossorigin="anonymous"></script>
</body>
</html>