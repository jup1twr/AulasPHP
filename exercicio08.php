<?php
    $alunos = [
        'Maria' => 8.5,
        'João' => 7.0,
        'Pedro' => 9.2,
        'Ana' => 6.5
    ];

    $soma = 0;
    $cont = 0;

    foreach ($alunos as $nome => $nota) {
        echo 'Nome: ' . $nome . '| Nota: ' . $nota . '<br>';
        if ($nota >= 7.0){ 
             echo '| Aprovado. <br> <br>';}
        else {
            echo '| Reprovado. <br> <br>';}
        $soma += $nota;
        $cont++;
    }

    echo 'A média é' . $soma / $cont;


?>