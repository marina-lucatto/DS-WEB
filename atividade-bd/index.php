<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos e Clientes</title>
</head>
<body>
    <h1>Cadastro de Produtos e Clientes</h1>
    <div class="container">
        <form action="insertionProduto.php" method="POST">
            <h2>Cadastro de Produto</h2>
            <label for="produtoNome">Nome:</label>
            <input type="text" id="produtoNome" name="nome" required>
            
            <label for="produtoValor">Valor:</label>
            <input type="number" step="0.01" id="produtoValor" name="valor" required>
            
            <label for="produtoEstoque">Estoque:</label>
            <input type="number" id="produtoEstoque" name="estoque" required>
            
            <input type="submit" value="Cadastrar Produto">
        </form>

        <form action="insertionCliente.php" method="POST">
            <h2>Cadastro de Cliente</h2>
            <label for="clienteNome">Nome:</label>
            <input type="text" id="clienteNome" name="nome" required>
            
            <label for="clienteEmail">E-mail:</label>
            <input type="email" id="clienteEmail" name="email" required>
            
            <input type="submit" value="Cadastrar Cliente">
        </form>
    </div>

    <div>
        <h2>Produtos Cadastrados</h2>
        <?php include 'consultaProdutos.php'; ?>

        <h2>Clientes Cadastrados</h2>
        <?php include 'consultaClientes.php'; ?>
    </div>
</body>
</html>
