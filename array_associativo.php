<?php
    $aluno = [
        'nome' => 'Maria', 
        'curso' => 'Desenv. Sistemas', 
        'nota' => 78
        ];

    echo 'A aluna ' . $aluno['nome'] . ' obteve a nota ' . $aluno['nota'] . ' no curso de ' . $aluno['curso'] . '.';
    
    /* um array associativo organiza os dados usando pares de CHAVE => VALOR
    chave (key) = identifica o dado. valor (value) = é o dado armazenado. EX: em ['nome' => 'João'], 'nome' é a chave e 'João' é o valor.*/
?>