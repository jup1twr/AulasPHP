<?php
    $texto = '  maría eduarda  ';
    $frase = 'PHP é chato!';

    echo '<h1>Strings<h1>';
    
    $nome = trim($texto); 
    // remover os espaços excessivos e deixar somente as letras, podendo ser ltrim() - tira os espaços da esquerda e rtrim() - tira os espaços da direita
    echo 'Limpo: ' . $nome . '<br>';

    $tam = strlen($nome); // retorna o comprimento da variável
    echo 'Tamanho: ' . $tam . '<br>';

    echo 'Maiúsculas: ' . mb_strtoupper($nome) . '<br>'; // deixa todas as letras maiúsculas
    echo 'Minúsculas: ' . mb_strtolower($nome) . '<br>'; // deixa todas as letras minúsculas

    $novaFrase = str_replace('chato', 'incrível', $frase); // substitui uma palavra na variável 
    echo 'Frase: ' . $novaFrase . '<br>';

    $espaco = strpos($nome, ' '); // encontra a posição solicitada, no caso o espaço
    $primeiro = substr($nome, 0, $espaco); // extrai substring
    echo 'Primeiro: ' . $primeiro . '<br>'; 

    echo 'Nome: ' . ucfirst($primeiro) . '<br>';
    /*
    substr($s, 2, 5) - extrai substring
    str_replace ('a', 'b', $s)
    explode(',', $s) - divide string em array
    implode(', ', $array) - junta array em string
    strpos ($s, 'busca') - encontra posição
    strrev($s) - inverte a ordem da string
    mb_stroupper / mb_strolower = para considerar acentuação na conversão.
    */
?>