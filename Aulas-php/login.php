<?php

// Dados de login corretos
$usuarioCorreto = "aluno";
$senhaCorreta = "sesi";

// Recebe os dados do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Verifica as credenciais
if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
    echo "Login feito com sucesso!";
    echo "<br><br><button onclick='history.back()'>Voltar</button>";
} else {
    echo "Usuário e/ou senha incorretos, tente novamente!";
    echo "<br><br><button onclick='history.back()'>Voltar</button>";
}

?>