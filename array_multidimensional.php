<?php
    /* é simplesmente um arary que contém outros arrais dentro dele.
    muito útil para tabelas de dados ou listas de registros (como resultados vindos do mySQL*/
    
    $turma = [
        ['nome' => 'Ana', 'nota' => 9.5], // turma [0]
        ['nome' => 'João', 'nota' => 7.0], // turma [1]
        ['nome' => 'Maria', 'nota' => 8.5] // turma [2]
    ];

    echo 'A nota do João é: ' . $turma[1]['nota'] . '<br>';
?>