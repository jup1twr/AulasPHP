<?php
    $vetor = range(1, 5);
    $vetor[] = 4;

    $qtd = count($vetor);
    echo 'Total de itens: $qtd <br>';

    $fim = array_pad($vetor, 10, 0);

    echo 'Array final:<br>';
    echo implode(', ', $fim) . '<br>';

    /* adicionar elemento $arr = 4
    criar array de 1 a 10: $arr = range(1, 10)
    retornar nº de elementos: count($arr) ou sizeof($arr)
    preencher até tamanho: array_pad($arr, 10, 0)
    transformar em string, separando por vírgula: echo implode (',', $arr)
    */
?>