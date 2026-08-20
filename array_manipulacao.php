<?php
    $f1 = ['martelo', 'alicate', 'fenda']; // caixa 1
    $f2 = ['marreta', 'alicate', 'prego']; // caixa 2
    $estoque = ['martelo' => 10, 'fenda' => 5]; // estoque

    $tem = in_array('alicate', $f1);
    echo($tem) ? 'Ferramenta existe! <br>' : 'Ferramenta não existe! <br>';

    $pos = array_search ('fenda', $f1);
    echo 'Ferramenta na posição: $pos <br>';

    $chaves = array_keys($estoque);
    print_r($chaves); // melhor que implode para debug
    echo '<br>';
    echo implode(',', $chaves); // melhor que print_r para exibir na tela

    $valores = array_values($estoque);
    print_r($valores);
    echo '<br>';

    $tudo = array_merge($f1, $f2);
    print_r($tudo);
    echo '<br>';

    $dif = array_diff($f1, $f2); // existe em $f1 e não existe em $f2
    print_r($dif);
?>