<?php

    $custoPeca = "400";
    $maoDiObra = 79.90;

    echo "A variável é uma : " . gettype  ($custoPeca) . "<br>";
    echo "A variável é uma : " . gettype($maoDiObra) . "<br>";

    $custoNovo = (float)$custoPeca;
    $custoNovo += $maoDiObra;
    
    echo "<b><u>O valor final do reparo é R$" . $custoNovo . " reais.</b></u><br>";
?>