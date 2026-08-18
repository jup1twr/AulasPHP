<?php
    $status = 1;

    switch ($status){
        case 1: // caso 01, retornando 'Ativo'
            echo 'Ativo';
            break; // sempre colocar o break 
        case 0:
            echo 'Inativo'; // caso 0, retornando 'Inativo'
            break;
        default: // o padrão estabelecido caso não consiga nenhuma resposta nos casos acima
            echo 'Desconhecido';
    }
?>