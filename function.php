<?php
    function soma($v1, $v2){ // eu preciso criar duas novas variáveis para a função
    global $valor; // para usar o $valor para todo o código    
    $valor = $v1 + $v2;
        return $valor;
    }

    $valor = 3;
    $res = soma(5,4);
    echo $valor; //  se eu rodar assim, vai retornar o Nº 3 pois é o valor declarado FORA da function
    
?>