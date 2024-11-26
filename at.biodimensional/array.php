<?php 

/* SEGUNDA ATIVIDADE */
    /* PRODUTOS */

    $produtos = array(
        array('nomeprod' => 'Oreo', 'precinho' => 4.19, 'estoqueprod' => 300),
        array('nomeprod' => 'Bis', 'precinho' => 4.99, 'estoqueprod' => 250),
        array('nomeprod' => 'Cappuccino', 'precinho' => 15.99, 'estoqueprod' => 100),
    );
    
    foreach ($produtos as $prod) {
        $total = $prod['precinho'] * $prod['estoqueprod'];
        echo 'Produto: ' . $prod['nomeprod'] . ' - Total: ' . $total . '<br><br><br>';
    }
    



/* NOTAS ALUNOS */
$alunos = array(
    array('nome' => 'Ana', 'matematica' => 8, 'portugues' => 7),
    array('nome' => 'Bruno', 'matematica' => 6, 'portugues' => 9),
    array('nome' => 'Carlos', 'matematica' => 7, 'portugues' => 8)
);

foreach ($alunos as $aluno) {
    $total = ($aluno['matematica'] + $aluno['portugues']) / 2;
    echo 'Nome do aluno: ' . $aluno['nome'] . ' - Média do aluno: ' . $total . '<br>';
}



?>