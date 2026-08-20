<?php
    function real($num){
        $vreal = number_format($num,2, ',', '.');
        return $vreal;
    }

    $prod = [
        'Nome: ' => 'Mouse Gamer',
        'Preco: ' => 89.90,
        'Estoque: ' => '15'
        ];

    echo 'Nome: ' . $prod['Nome: '] .  '<br>';
    echo 'Preço: R$' . real($prod['Preco: ']) . '<br>';
    echo 'Estoque: ' . $prod['Estoque: '] . '<p>';

    echo 'O produto ' . $prod['Nome: '] . ' custa R$ ' 
    . real($prod['Preco: ']) . ' e possui ' 
    . $prod['Estoque: '] . ' unidades em estoque.';
?>