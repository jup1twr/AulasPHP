<?php
    $cod = 4;
    $qtde = 10;

    switch($cod){
        case 1:
            $item = 'Café Expresso';
            $valor = 5.00;
            break;
        case 2:
            $item = 'Cappuccino';
            $valor = 8.00;
            break;
        case 3:
            $item = 'Chocolate Quente';
            $valor = 10.00;
            break;
        default:
            echo '<u> Opção inválida </u> <p>';
            exit; // o exit serve para NÃO rodar o código após
    }
    
    $total = $valor * $qtde;

    echo '<b> Bebida: </b>' . $item . '<br>' . 
    '<b> Quantidade: </b>' . $qtde . '<br>' . 
    '<b> Valor total a pagar: </b>' . $total . ' reais <br>';
?>