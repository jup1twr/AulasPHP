<?php
    $frutas = ['Maçã', 'Banana', 'Laranja', 'Uva'];

    foreach($frutas as $valor){
        echo 'Fruta> ' . $valor . '<br>';
    }

    echo 'Atual (current): ' . current($frutas) . '<br>'; // Maçã
    echo 'Próximo (next): ' . next($frutas) . '<br>'; // Banana
    echo 'Próximo (next): ' . next($frutas) . '<br>'; // Laranja
    echo 'Atual (current): ' . current($frutas) . '<br>'; // Maçã
    echo 'Anterior (prev): ' . prev($frutas) . '<br>'; // Banana
    echo 'Último (end): ' . end($frutas) . '<br>'; // Uva
    echo 'Reiniciar (reset): ' . reset($frutas) . '<br>'; // Maçã
?>