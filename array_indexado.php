<?php
    // array indexado (numéricos) são as lostas tradicionais onde cada item recebe um número (índice) automaticamente 
    
    $frutas = ['Maçã', 'Banana', 'Laranja'];
    foreach($frutas as $i){
         echo 'Eu gosto de ' . $i . '<br>'; 
         // o array começa a contar do nº 0, ou seja, a posição 0 seria maçã e assim por diante.

    }
    // add um novo item ao final do array (um vetor) = lista
    $frutas[] = 'Morango';
